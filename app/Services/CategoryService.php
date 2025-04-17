<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class CategoryService
{
    public function getFilteredCategoriesForDataTable(Request $request)
    {
        $query = Category::with('parent', 'children', 'image');

        if (!empty($request->parent_category)) {
            $query->where('parent_id', $request->parent_category);
        }

        if (!is_null($request->show_in_menu)) {
            $query->where('show_in_menu', $request->show_in_menu);
        }

        if (!is_null($request->show_in_home)) {
            $query->where('show_in_home', $request->show_in_home);
        }

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('image', function ($row) {
                $image = $row->image;
                $imageUrl = $image
                    ? asset($image->path)
                    : "https://ui-avatars.com/api/?name=" . urlencode($row->en_name);

                return '<img class="rounded-circle header-profile-user" src="' . $imageUrl . '" alt="' . e($row->name) . '" width="50" height="50">';
            })
            ->addColumn('bn_name', fn($row) => $row->bn_name ?? 'N/A')
            ->addColumn('en_name', fn($row) => $row->en_name ?? 'N/A')
            ->addColumn('parent_category', fn($row) =>
            $row->parent ? $row->parent->en_name . ' (' . $row->parent->bn_name . ')' : 'N/A'
            )
            ->addColumn('show_in_menu', function ($row) {
                return $row->show_in_menu
                    ? '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" checked></div>'
                    : '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" disabled></div>';
            })
            ->addColumn('show_in_home', function ($row) {
                return $row->show_in_home
                    ? '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" checked></div>'
                    : '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" role="switch" disabled></div>';
            })
            ->addColumn('actions', function ($row) {
                return '<div class="btn-group" role="group">
                            <a href="javascript:void(0)" class="edit btn btn-secondary btn-sm" data-id="' . $row->id . '">Edit</a>
                            <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="' . $row->id . '">Delete</a>
                        </div>';
            })
            ->rawColumns(['image', 'show_in_menu', 'show_in_home', 'actions'])
            ->make(true);
    }

    public function storeCategory(Request $request): Category
    {
        $category = Category::create([
            'en_name' => $request->en_name,
            'bn_name' => $request->bn_name,
            'slug' => Str::slug($request->en_name),
            'parent_id' => $request->parent_category,
            'show_in_menu' => $request->has('showInMenu') ? 1 : 0,
            'show_in_home' => $request->has('showInHome') ? 1 : 0,
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'category_' . time() . '.' . $image->getClientOriginalExtension();
            $imagePath = 'uploads/category/' . $imageName;

            $image->move(public_path('uploads/category'), $imageName);

            $category->image()->create([
                'name' => $imageName,
                'path' => $imagePath,
            ]);
        }

        return $category;
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreCategoryRequest;
use App\Models\Category;
use App\Services\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class CategoryController extends Controller
{
    public function __construct(protected CategoryService $categoryService) {}

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->categoryService->getFilteredCategoriesForDataTable($request);
        }

        $parentCategories = Category::whereNull('parent_id')->get();
        return view('admin.category.index', compact('parentCategories'));
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->categoryService->storeCategory($request);

        return response()->json([
            'status' => 'success',
            'message' => 'Category created successfully',
        ]);
    }
}

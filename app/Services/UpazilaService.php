<?php

namespace App\Services;

use App\Models\Upazila;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

interface UpazilaService
{
    public function getUpazilasForDataTable(Request $request)
    {
        $query = Upazila::with('district');

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('bn_name', fn ($row) => $row->bn_name ?? 'N/A')
            ->addColumn('en_name', fn ($row) => $row->en_name ?? 'N/A')
            ->addColumn('district', fn ($row) => $row->district->en_name ?? 'N/A')
            ->addColumn('actions', function ($row) {
                return '<div class="btn-group" role="group">
                            <a href="javascript:void(0)" class="edit btn btn-secondary btn-sm" data-id="'.$row->id.'"> <i class="ri-pencil-line"></i> Edit</a>
                            <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="'.$row->id.'">  <i class="ri-delete-bin-line"></i> Delete</a>
                        </div>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function storeUpazila(Request $request): Upazila
    {
        $upazila = Upazila::create([
            'district_id' => $request->district_id,
            'en_name' => $request->en_name,
            'bn_name' => $request->bn_name,
            'slug' => Str::slug($request->en_name),
        ]);

        return $upazila;
    }

    public function updateCategory(Request $request, Upazila $upazila): Upazila
    {
        $upazila->update([
            'district_id' => $request->district_id,
            'en_name' => $request->en_name,
            'bn_name' => $request->bn_name,
            'slug' => Str::slug($request->en_name),
        ]);

        return $upazila;
    }

    public function getUpazilaById(Upazila $upazila): Upazila
    {
        return $upazila;
    }

    public function deleteUpazila(Upazila $upazila): bool
    {
        // Delete the category itself
        return $upazila->delete();
    }
}

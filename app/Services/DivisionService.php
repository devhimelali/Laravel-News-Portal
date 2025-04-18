<?php

namespace App\Services;

use App\Models\Division;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class DivisionService
{
    public function getDivisionsForDataTable(Request $request)
    {
        $query = Division::query();

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('bn_name', fn ($row) => $row->bn_name ?? 'N/A')
            ->addColumn('en_name', fn ($row) => $row->en_name ?? 'N/A')
            ->addColumn('actions', function ($row) {
                return '<div class="btn-group" role="group">
                            <a href="javascript:void(0)" class="edit btn btn-secondary btn-sm" data-id="'.$row->id.'"> <i class="ri-pencil-line"></i> Edit</a>
                            <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="'.$row->id.'">  <i class="ri-delete-bin-line"></i> Delete</a>
                        </div>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function storeDivision(Request $request): Division
    {
        $division = Division::create([
            'en_name' => $request->en_name,
            'bn_name' => $request->bn_name,
            'slug' => Str::slug($request->en_name),
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return $division;
    }

    public function updateCategory(Request $request, Division $division): Division
    {
        $division->update([
            'en_name' => $request->en_name,
            'bn_name' => $request->bn_name,
            'slug' => Str::slug($request->en_name),
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return $division;
    }

    public function getDivisionById(Division $division): Division
    {
        return $division;
    }

    public function deleteDivision(Division $division): bool
    {
        if ($division->districts()->count()) {
            foreach ($division->districts as $district) {
                if ($district->upazilas()->count()) {
                    foreach ($district->upazilas as $upazila) {
                        $upazila->delete();
                    }
                }
                $district->delete();
            }
        }

        // Delete the category itself
        return $division->delete();
    }
}

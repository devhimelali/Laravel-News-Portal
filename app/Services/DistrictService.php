<?php

namespace App\Services;

use App\Models\District;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class DistrictService
{
    public function getDistrictsForDataTable(Request $request)
    {
        $query = District::with('division');

        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('bn_name', fn ($row) => $row->bn_name ?? 'N/A')
            ->addColumn('en_name', fn ($row) => $row->en_name ?? 'N/A')
            ->addColumn('division', fn ($row) => $row->division->en_name ?? 'N/A')
            ->addColumn('actions', function ($row) {
                return '<div class="btn-group" role="group">
                            <a href="javascript:void(0)" class="edit btn btn-secondary btn-sm" data-id="'.$row->id.'"> <i class="ri-pencil-line"></i> Edit</a>
                            <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-id="'.$row->id.'">  <i class="ri-delete-bin-line"></i> Delete</a>
                        </div>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

    public function storeDistrict(Request $request): District
    {
        $district = District::create([
            'division_id' => $request->division_id,
            'en_name' => $request->en_name,
            'bn_name' => $request->bn_name,
            'slug' => Str::slug($request->en_name),
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return $district;
    }

    public function updateCategory(Request $request, District $district): District
    {
        $district->update([
            'division_id' => $request->division_id,
            'en_name' => $request->en_name,
            'bn_name' => $request->bn_name,
            'slug' => Str::slug($request->en_name),
            'lat' => $request->lat,
            'long' => $request->long,
        ]);

        return $district;
    }

    public function getDistrictById(District $district): District
    {
        return $district;
    }

    public function deleteDistrict(District $district): bool
    {
        if ($district->upazilas()->count()) {
            foreach ($district->upazilas as $upazila) {
                $upazila->delete();
            }
        }

        // Delete the category itself
        return $district->delete();
    }
}

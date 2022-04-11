<?php

namespace App\Http\Controllers\Api\SubDistrict;

use App\Http\Controllers\Controller;
use App\Http\Resources\SubDistrictResource;
use App\Models\SubDistrict;
use Illuminate\Http\Request;

class ListSubDistrictController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $subDistricts = SubDistrict::withCount('places')->get();

        return SubDistrictResource::collection($subDistricts);
    }
}

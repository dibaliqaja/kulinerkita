<?php

namespace App\Http\Controllers\Api\Place;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlaceResource;
use App\Models\Place;
use Illuminate\Http\Request;

class RelatedPlaceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Place $place)
    {
        $related = $place->subDistrict()
                ->places()
                ->where('id', '!=', $place->id)
                ->inRandomOrder()
                ->get()
                ->take(config('kuliner.related_place_limit'));

        return PlaceResource::collection($related);
    }
}

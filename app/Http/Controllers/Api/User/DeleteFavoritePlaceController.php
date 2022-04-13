<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class DeleteFavoritePlaceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Place $place)
    {
        $request_place = $request->user()->places();
        
        if ($request_place->wherePivot('place_id', $place->id)->exists()) {
            $request_place->detach($place);

            return response()->json([
                'message' => 'Success deleted favorite place'
            ]);
        }

        return response()->json([
            'message' => 'This place is not your favorite lists'
        ]);
    }
}

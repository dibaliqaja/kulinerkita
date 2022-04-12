<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use App\Models\Place;
use Illuminate\Http\Request;

class StoreFavoritePlaceController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Place $place)
    {
        $user = $request->user();
        if ($user->places()->wherePivot('place_id', $place->id)->exists()) {
            return response()->json([
                'message' => 'Place has already in your favorite lists'
            ], 200);
        }

        $user->places()->attach($place->id);

        return response()->json([
            'message' => 'Place added to favorite'
        ], 201);
    }
}

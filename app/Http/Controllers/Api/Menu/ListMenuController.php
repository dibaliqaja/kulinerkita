<?php

namespace App\Http\Controllers\Api\Menu;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuResource;
use App\Models\Place;
use Illuminate\Http\Request;

class ListMenuController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Place $place)
    {
        $menus = $place->menus()->paginate(10);

        return MenuResource::collection($menus);
    }
}

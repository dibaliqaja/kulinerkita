<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class PlaceMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Place $place)
    {
        if ($request->ajax()) {
            $menus = $place->menus;

            return DataTables::of($menus)
                ->addIndexColumn()
                ->editColumn('image', fn ($menu) => '<img src="'. $menu->image_url .'" />')
                ->addColumn('action', 'places.menus.dt-action')
                ->rawColumns(['image', 'action'])
                ->toJson();
        }

        return view('places.menus.index', [
            'place' => $place
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Place $place)
    {
        return view('places.menus.create', [
            'categories' => Category::get(),
            'place' => $place
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Place $place)
    {
        $this->validate($request, [
            'name'            => 'required|unique:menus,name,except,id',
            'description'     => 'required',
            'category_id'     => 'required',
            'price'           => 'required|numeric',
            'image'           => 'required|image',
        ]);

        $image = null;

        if ($request->has('image')) {
            $image = $request->file('image')->store('images/menus');
        }

        $place->menus()->create([
            'name'            => $request->name,
            'slug'            => Str::slug($request->name),
            'description'     => $request->description,
            'category_id'     => $request->category_id,
            'price'           => $request->price,
            'image'           => $image,
        ]);

        return redirect()->route('menu.index', $place)
                         ->withSuccess('Berhasil menambahkan menu');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

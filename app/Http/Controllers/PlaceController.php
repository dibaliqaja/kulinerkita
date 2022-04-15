<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\SubDistrict;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $places = Place::with('subDistrict');

            return DataTables::of($places)
                ->addIndexColumn()
                ->addColumn('subDistrictName', fn (Place $place) => $place->subDistrict->name)
                ->addColumn('place-menu', 'places.place-link')
                ->addColumn('action', 'places.dt-action')
                ->rawColumns(['place-menu', 'action'])
                ->toJson();
        }

        return view('places.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places.create', [
            'subDistricts' => SubDistrict::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'            => 'required|unique:places,name,except,id',
            'description'     => 'required',
            'sub_district_id' => 'required',
            'address'         => 'required',
            'phone'           => 'required',
            'image'           => 'required|image',
            'latitude'        => 'required',
            'longitude'       => 'required'
        ]);

        $image = null;

        if ($request->has('image')) {
            $image = $request->file('image')->store('images');
        }

        Place::create([
            'name'            => $request->name,
            'description'     => $request->description,
            'sub_district_id' => $request->sub_district_id,
            'address'         => $request->address,
            'phone'           => $request->phone,
            'image'           => $image,
            'latitude'        => $request->latitude,
            'longitude'       => $request->longitude
        ]);

        return redirect()->route('places.index')
                         ->withSuccess('Berhasil menambahkan tempat');
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
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        return view('places.edit', [
            'subDistricts' => SubDistrict::get(),
            'place' => $place
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        $this->validate($request, [
            'name'            => 'required|unique:categories,name,except,id',
            'description'     => 'required',
            'sub_district_id' => 'required',
            'address'         => 'required',
            'phone'           => 'required',
            'image'           => 'image',
            'latitude'        => 'required',
            'longitude'       => 'required'
        ]);

        $image = $place->image;

        if ($request->has('image')) {
            if(Storage::exists($image)) Storage::delete($image);
            $image = $request->file('image')->store('images');
        }

        $place->update([
            'name'            => $request->name,
            'description'     => $request->description,
            'sub_district_id' => $request->sub_district_id,
            'address'         => $request->address,
            'phone'           => $request->phone,
            'image'           => $image,
            'latitude'        => $request->latitude,
            'longitude'       => $request->longitude
        ]);

        return redirect()->route('places.index')
                         ->withInfo('Berhasil mengedit tempat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        if (Storage::exists($place->image)) Storage::delete($place->image);
        if ($place->delete()) {
            session()->flash('error', 'Berhasil menghapus tempat');
            return response()->json([ 'success' => true ]);
        }

        return response()->json([ 'success' => false ]);
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\GalaksijaResource;
use App\Models\Galaksija;
use Illuminate\Http\Request;

class GalaksijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glks = Galaksija::all();
        return GalaksijaResource::collection($glks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galaksija  $galaksija
     * @return \Illuminate\Http\Response
     */
    public function show(Galaksija $galaksija)
    {
        return new GalaksijaResource($galaksija);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galaksija  $galaksija
     * @return \Illuminate\Http\Response
     */
    public function edit(Galaksija $galaksija)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Galaksija  $galaksija
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galaksija $galaksija)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Galaksija  $galaksija
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galaksija $galaksija)
    {
        $galaksija->delete();
        return response()->json(['Galaksija je obrisana iz baze podataka!', new GalaksijaResource($galaksija)]);
    }
}

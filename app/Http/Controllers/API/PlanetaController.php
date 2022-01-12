<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\PlanetaResource;
use App\Models\Planeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlanetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plnt = Planeta::all();
        return PlanetaResource::collection($plnt);
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
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'oznaka' => 'required|string',
            'temperatura' => 'required|integer',
            'galaksija_id' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška pri čuvanju nove planete!', $validator->errors()]);
        }

        $planeta = Planeta::create([
            'ime' => $request->ime,
            'oznaka' => $request->oznaka,
            'temperatura' => $request->temperatura,
            'galaksija_id' => $request->galaksija_id,
        ]);

        return response()->json(['Planeta je sačuvana u bazi!', new PlanetaResource($planeta)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function show(Planeta $planeta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function edit(Planeta $planeta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Planeta $planeta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Planeta  $planeta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Planeta $planeta)
    {
        $planeta->delete();
        return response()->json(['Planeta je obrisana iz baze podataka!', new PlanetaResource($planeta)]);
    }
}

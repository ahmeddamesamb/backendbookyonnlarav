<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreZoneRequest;
use App\Http\Requests\UpdateZoneRequest;
use App\Models\Zone;

class ZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
//
        $zone = Zone::all();
        if ($zone !== null) {
            return response()->json([
                'zone' => ZoneResource::collection($zone),
                "message" => "zone recuperer  avec succes",

            ], 200);
        }
        return response()->json([
            "message" => "error lors de la recuperation"], 401);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreZoneRequest $request)
    {
        //
        $zone = Zone::create($request->validated());
        if ($zone !== null) {
            return new ZoneResource($zone);
        }
        return response()->json([
            "message" => "error lors de l'insertion de la zone"], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(Zone $zone)
    {
        //
        return $zone;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateZoneRequest $request, Zone $zone)
    {
        //
        $zone->update($request->validated());
        if ($zone !== null) {
            return new ZoneResource($zone);

        }
        return response()->json([
            "message" => "error lors de l'insertion du zone"], 401);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Zone $zone)
    {
        //
        $zone->delete();

    }
}
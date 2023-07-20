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
        return response()->json([
            'zone' => $zone,
            "message" => "zone recuperer  avec succes",

        ],200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreZoneRequest $request)
    {
        //
        $zone = Zone::create([
            'nom' => $request->nom,
            'coutLivraison' => $request->coutLivraison,
            'etatZone' => $request->etatZone,
        ], 200);
        return new StoreZoneRequest($zone);
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
        $zone->update([
            'nom' => $request->nom,
            'coutLivraison' => $request->coutLivraison,
            'etatZone' => $request->etatZone,
        ], 200);
        return new UserResource($zone);

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

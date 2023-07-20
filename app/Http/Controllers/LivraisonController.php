<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Livraison;

class LivraisonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $livraison = Zone::all();
        return response()->json([
            'livraison' => $livraison,
            "message" => "livraison recuperer  avec succes",

        ],200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LivraisonRequest $request)
    {
        //
        $livraison = Livraison::create([
            'telephoneLivraison' => $this->telephoneLivraison,
            'etatLivraison' => $this->etatLivraison,
            'zone_id' => $this->zoneId,
        ],200);
        return new LivraisonRequest($livraison);

    }

    /**
     * Display the specified resource.
     */
    public function show(Livraison $livraison)
    {
        //
        return $livraison;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LivraisonRequest $request, Livraison $livraison)
    {
        //
        $livraison->update([
            'telephoneLivraison' => $this->telephoneLivraison,
            'etatLivraison' => $this->etatLivraison,
            'zone_id' => $this->zoneId,
        ],200);
        return new LivraisonResource($livraison);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livraison $livraison)
    {
        //
        $livraison->delete();

    }
}

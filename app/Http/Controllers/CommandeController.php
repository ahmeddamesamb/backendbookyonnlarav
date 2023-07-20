<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Commande;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $commande = Commande::all();
        return response()->json([
            'commande' => $commande,
            "message" => "livrcommandeaison recuperer  avec succes",

        ], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommandeRequest $request)
    {
        //
        $commande = Commande::create([
            'etatCommande' => $this->etatCommande,
            'numeroCommande' => $this->numeroCommande,
            'statutCommande' => $this->statutCommande,
            'paiement' => $this->paiement,
            'user_id' => $this->user_id,
            'zone_id' => $this->zone_id,
            'lignCommande_id' => $this->lignCommande_id,
        ], 200);
        return new StoreZoneRequest($commande);
    }

    /**
     * Display the specified resource.
     */
    public function show(Commande $commande)
    {
        //
        return $commande;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CommandeResource $request, Commande $commande)
    {
        //
        $commande->update([
            'etatCommande' => $this->etatCommande,
            'numeroCommande' => $this->numeroCommande,
            'statutCommande' => $this->statutCommande,
            'paiement' => $this->paiement,
            'user_id' => $this->user_id,
            'zone_id' => $this->zone_id,
            'lignCommande_id' => $this->lignCommande_id,
        ], 200);
        return new CommandeResource($commande);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commande $commande)
    {
        //
        $commande->delete();

    }
}

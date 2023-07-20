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
        if ($commande !== null) {
            return response()->json([
                'commande' => CommandeResource::collection($commande),
                "message" => "commande recuperer  avec succes",

            ], 200);
        }
        return response()->json([
            "message" => "error lors de la recuperation commande"], 401);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommandeRequest $request)
    {
        //
        $commande = Commande::create($request->validated());
        if ($commande !== null) {
            return new CommandeResource($commande);

        }
        return response()->json([
            "message" => "error lors l'insertion de la commande"], 401);
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
        $commande->update($request->validated());
        if ($commande !== null) {
            return new CommandeResource($commande);

        }
        return response()->json([
            "message" => "error lors de la mise a jours de la commande"], 401);
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

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $produit = Produit::all();
        if ($produit !== null) {
            return response()->json(['produit' => ProduitResource::collection($produit),
                "message" => "zone recuperer  avec succes",

            ], 200);
        }
        return response()->json([
            "message" => "error lors de la recuperation produit"], 401);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProduitRequest $request)
    {
        //
        $produit = Produit::create($request->validated());
        if ($produit !== null) {
            return new ProduitResource($produit);

        }
        return response()->json([
            "message" => "error lors de l'insertion du produit"], 401);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {
        //
        return $produit;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ZoneRequest $request, Produit $produit)
    {
        //
        $produit->update($request->validated());
        return new ProduitResource($produit);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produit $produit)
    {
        //
        $produit->delete();

    }
}
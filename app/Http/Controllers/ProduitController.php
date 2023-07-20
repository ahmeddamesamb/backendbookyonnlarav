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
        return response()->json(

            [
                'produit' => $produit,
                "message" => "produit recuperer  avec succes",

            ], 200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProduitRequest $request)
    {
        //
        $produit = Produit::create([
            'image' => $this->image,
            'description' => $this->description,
            'libelle' => $this->libelle,
            'categorie' => $this->categorie,
            'prix' => $this->prix,
            'etatProduit' => $this->etatProduit,
            'quantiteStock' => $this->quantiteStock,
            'lignCommande_id' => $this->lignCommande_id,
            'user_id' => $this->user_id,

        ], 200);
        return new ProduitRequest($produit);

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
        $produit->update([
            'image' => $this->image,
            'description' => $this->description,
            'libelle' => $this->libelle,
            'categorie' => $this->categorie,
            'prix' => $this->prix,
            'etatProduit' => $this->etatProduit,
            'quantiteStock' => $this->quantiteStock,
            'lignCommande_id' => $this->lignCommande_id,
            'user_id' => $this->user_id,
        ], 200);
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
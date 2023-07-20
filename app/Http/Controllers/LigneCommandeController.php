<?php

namespace App\Http\Controllers;

use App\Models\LigneCommande;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLigneCommandeRequest;
use App\Http\Requests\UpdateLigneCommandeRequest;

class LigneCommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLigneCommandeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(LigneCommande $ligneCommande)
    {
        //
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLigneCommandeRequest $request, LigneCommande $ligneCommande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LigneCommande $ligneCommande)
    {
        //
    }
}

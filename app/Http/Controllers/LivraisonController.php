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
        $livraison = Livraison::all();
        if ($livraison !== null) {
            return response()->json(['livraison' => LivraisonResource::collection($livraison),
                "message" => "livraison recuperer  avec succes",

            ], 200);}
        return response()->json([
            "message" => "error lors de la recuperation livraison"], 401);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LivraisonRequest $request)
    {
        //
        $livraison = Livraison::create($request->validated());
        if ($livraison !== null) {
            return new LivraisonResource($livraison);

        }
        return response()->json([
            "message" => "error lors de l'insertion du livraison"], 401);

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
        $livraison->update($request->validated());
        if ($livraison !== null) {
            return new LivraisonResource($livraison);

        }
        return response()->json([
            "message" => "error lors de l'insertion du livraison"], 401);

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

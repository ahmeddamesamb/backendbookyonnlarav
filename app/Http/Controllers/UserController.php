<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = User::all();
        if ($user !== null) {
            return response()->json([
                'user' => UserResource::collection($user),
                "message" => "user recuperer  avec succes",

            ], 200);
        }
        return response()->json([
            "message" => "error lors de la recuperation user"], 401);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        $ajout = array_merge($request->validated(), ['is_enable' => true,
            'etatLivreur' => true,
            'matriculeMoto' => 'MAT_' . Str::random(),
            'role_id' => $request->role_id]);

        $user = User::create($ajout);
        if ($user !== null) {
            return new UserResource($user);

        }
        return response()->json([
            "message" => "error lors de l'insertion du user"], 401);

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $user)
    {
        //
        $user->update($request->validated());
        if ($user !== null) {
            return new UserResource($user);

        }
        return response()->json([
            "message" => "error lors de l'insertion de user"], 401);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
    }
}

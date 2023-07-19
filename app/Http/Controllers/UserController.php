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
        return response()->json($user);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'telephone' => $request->telephone,
            'is_enable' => true,
            'etatLivreur' => true,
            'matriculeMoto' => 'MAT_' . Str::random(),
            'role_id' => $request->role_id,
        ]);
        return new UserResource($user);

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
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'telephone' => $request->telephone,
            'is_enable' => true,
            'etatLivreur' => true,
            'matriculeMoto' => 'MAT_' . Str::random(),
            'role_id' => $request->role_id,
        ]);
        return new UserResource($user);
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

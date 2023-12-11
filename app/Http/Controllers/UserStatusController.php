<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserStatusCollection;
use App\Http\Resources\UserStatusResource;
use App\Models\UserStatus;
use Illuminate\Http\Request;

class UserStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        return new UserStatusCollection(UserStatus::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserStatus $userStatus)
    {
        return new UserStatusResource($userStatus);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserStatus $userStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserStatus $userStatus)
    {
        //
    }
}

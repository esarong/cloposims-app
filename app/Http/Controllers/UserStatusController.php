<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserStatusCollection;
use App\Http\Resources\UserStatusResource;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function index()
    {
        //return new UserStatusCollection(UserStatus::all());

        return response()->json(new UserStatusCollection(UserStatus::all()),
    status:Response::HTTP_OK);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userstatus = UserStatus::create($request->only([
            'username', 'first_name', 'last_name', 'address', 'role', 'email', 
       ]));
   
       return new UserStatusResource($userstatus);
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
        $userStatus->delete();

        return response()->json(data:null, status:Response::HTTP_NO_CONTENT);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return\Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
          //$users = User::all();
        
          //return view(view: 'users.index')->with('users', $users);
         
          //return UserResource::collection(User::all());
          
          
          //return new UserCollection(User::all());
          
          //the line above is the previous one used


          return response()->json(new UserCollection(User::all()),
    status:response::HTTP_OK); //new suggestion of linkedin video 
        
    }

    /**
     * Store a newly created resource in storage.
     * @return UserResource
     */
    public function store(Request $request)
    {
        $user = User::create($request->only([
             'username', 'first_name', 'last_name', 'address', 'role', 'email', 
        ]));
    
        return new UserResource($user);
        
    
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->only([
            'user_id', 'user_status_id', 'username', 'first_name', 'last_name', 'role', 'password'
       ]));
       
       return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return response()->json(data:null, status:Response::HTTP_NO_CONTENT);
    }
}

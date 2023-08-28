<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index()  {
        return response()->json(User::get());
        
    }

    function store(UserRequest $request)  {

        User::create($request->validated());

        return response()->json('user is created');
    }

    function delete(User $user)  {
        $user->delete();
        return response()->json('user is deleted');
        
    }

    function find(User $user)  {
        return response()->json($user);
    }

    function update(UserRequest $request, User $user)  {
        $user->update($request->validated());
        return response()->json($user);
    }
}

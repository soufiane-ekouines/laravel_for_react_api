<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    function index()  {
        return response()->json(User::get());
        
    }

    function delete(User $user)  {
        $user->delete();
        return response()->json('user is deleted');
        
    }
}

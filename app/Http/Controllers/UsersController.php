<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function userprofile(string $users){
        $user = User::find($users);
        return view("Users.usuario",compact('user'));
    }
}

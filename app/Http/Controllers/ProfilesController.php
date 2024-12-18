<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::find($user);

        return view('home',[
            'user'=>$user,
        ]);
    }
}

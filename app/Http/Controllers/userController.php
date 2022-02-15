<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //

    public function index(){
        return view('home.Home', [
            'title' => "Home",
            'user'  => User::all()
        ]);
    }
}

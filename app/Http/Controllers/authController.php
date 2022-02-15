<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class authController extends Controller
{   
    public function index(){
        return view('landingpage');
    }

    public function login(){
        return view('login');
    }

    public function validation(Request $request){
        $vali = $request->validate([
                'email' => 'required',
                'password' => 'required|min:3'
            ]);

        if(Auth::attempt($vali)){
            $request->session()->regenerate();

            User::where('id', auth()->user()->id)
                ->update([
                    'status'  => 1
                ]);
            
            return redirect()->intended('Home');

        }else{
            return back()->with('error', 'Pastikan mengisi data dengan benar');
        }
    }

    public function logout(Request $request){

        User::where('id', auth()->user()->id)
        ->update([
            'status'  => 0
        ]);

        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function register(){
        return view('register');
    }

    public function registration(Request $request){
        $request->validate([
            'email' => 'email:dns|required|min:2|unique:users',
            'password' => 'required|min:4|max:20',
            'name'  => 'required',
        ]);

        if($request->password != $request->password2){
            return redirect('/register')->with('error', 'password kedua tidak cocok');
        }

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password'  => Hash::make($request->password),
            'id_role'   => 1,
            'status'    => 0
        ]);

        return redirect('/Home')->with('success', 'Pengguna berhasil ditambahkan');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kelas;
use App\Models\status;
use App\Models\siswa;
use App\Models\recapt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    //

    public function index(){
        return view('home.home', [
            'title' => "Home",
            'user'  => User::all(),
            'kelas' => kelas::all()
        ]);
    }

    public function absen(kelas $kelas){
        // @dd($kelas->id_kelas);
        $siswa = siswa::where('id_kelas', $kelas->id_kelas)->get();
        $status= status::all();
        // @dd($status->all());
        return view('home.absen-kelas', [
            'siswa' => $siswa,
            'status'=> $status,
            'title' => "Absensi kelas". $kelas->kelas
        ]);
    }

    public function dashboard(){
        // @dd("apa");
        return view('dashboard/Home', [
            "title" => "Dashboard"
        ]);
    }
}

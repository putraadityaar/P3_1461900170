<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class putraController extends Controller
{

    public function dokter()
    {
        $dokter = DB::table('dokter')->get();
        return view('dokter0170',['dokter' => $dokter]);
    }

    public function pasien()
    {
        $pasien = DB::table('pasien')->get();
        return view('pasien0170',['pasien' => $pasien]);
    }

    public function kamar()
    {
        $kamar = DB::table('kamar')->get();
        return view('kamar0170',['kamar' => $kamar]);
    }
    public function user()
    {
        $user = DB::table('user')->get();
        return view('user0170',['user' => $user]);
    }
}

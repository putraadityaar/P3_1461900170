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

    public function kamar()
    {
        $kamar = DB::table('kamar')
        ->join('pasien','kamar.id_pasien','=','pasien.id')
        ->join('dokter','kamar.id_dokter','=','dokter.id')
        ->select('kamar.id AS idk','pasien.nama AS pnama','dokter.nama AS dnama')
        ->orderby('idk','asc')
        ->get();
        return view('kamar0170',['kamar' => $kamar]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasienController extends Controller
{
    public function pasien()
    {
    $pasien = DB::table('pasien')->get();
    return view('pasien0170',['pasien' => $pasien]);
    }

    public function tambah()
    {
        return view('tambah0170');
    }

    public function hapus($id)
    {
        DB::table('pasien')->where('id',$id)->delete();
        return redirect('/pasien');

    }
}

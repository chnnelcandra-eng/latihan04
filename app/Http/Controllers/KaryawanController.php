<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function formkaryawan()
    {
        return view('formkaryawan');
    }

    public function insertkaryawan(Request $x)
    {
       echo "Hasil";
       echo "<br>";
       echo $x->kode;
       echo "<br>";
       echo $x->nama;
       echo "<br>";
       echo $x->umur;
    }
}
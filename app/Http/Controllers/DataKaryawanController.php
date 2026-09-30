<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataKaryawanController extends Controller
{
     public function tampil()
    {
        $karyawan = [
            ['nama' => 'Budi Santoso',   'jabatan' => 'Kasir',   'gaji' => 3500000, 'aktif' => true],
            ['nama' => 'Sari Wulandari', 'jabatan' => 'Gudang',  'gaji' => 3200000, 'aktif' => true],
            ['nama' => 'Andi Pratama',   'jabatan' => 'Manajer', 'gaji' => 6000000, 'aktif' => false],
        ];
        return view('karyawan.tampil', compact('karyawan'));
    }
}

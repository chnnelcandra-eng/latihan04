<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function tampil()
    {
        $supplier = [
            ['nama' => 'PT Maju Jaya',         'kota' => 'Surabaya', 'telepon' => '031-555-1234',  'aktif' => true],
            ['nama' => 'CV Sumber Rejeki',     'kota' => 'Malang',   'telepon' => '0341-555-987',  'aktif' => true],
            ['nama' => 'UD Berkah Elektronik', 'kota' => 'Sidoarjo', 'telepon' => '031-555-4321',  'aktif' => false],
        ];
        return view('supplier.tampil', compact('supplier'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function katalog()
{
    $items = [
        ['kode' => 'BRG001', 'nama_item' => 'Laptop Asus',    'kategori' => 'Elektronik', 'harga' => 8000000, 'diskon_persen' => 10],
        ['kode' => 'BRG002', 'nama_item' => 'Mouse Wireless', 'kategori' => 'Aksesoris',  'harga' => 150000,  'diskon_persen' => 20],
        ['kode' => 'BRG003', 'nama_item' => 'Keyboard Mekanik','kategori' => 'Aksesoris', 'harga' => 500000,  'diskon_persen' => 25],
        ['kode' => 'BRG004', 'nama_item' => 'Lemari',    'kategori' => 'Rumah Tangga', 'harga' => 1000000, 'diskon_persen' => 10],
        ['kode' => 'BRG005', 'nama_item' => 'Flashdisk 64GB', 'kategori' => 'Penyimpanan','harga' => 100000,  'diskon_persen' => 0],
    ];

    return view('penjualan.katalog', compact('items'));
}
}
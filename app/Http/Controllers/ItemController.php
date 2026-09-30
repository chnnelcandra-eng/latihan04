<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $toko = "Maju Jaya";
        $kategori = "Elektronik & Aksesoris";
        $xarray = ['Java', 'PHP', 'asp'];
        $yarray = ['nama1'=>'Java', 'nama2'=>'PHP', 'nama3'=>'asp'];

        $items = [
        ['id' => 1, 'nama' => 'Laptop ', 'harga' => 8500000, 'stok' => 4, 'is_active' =>
        true],
        ['id' => 2, 'nama' => 'Mouse ', 'harga' => 125000, 'stok' => 15, 'is_active' =>
        true],
        ['id' => 3, 'nama' => 'Flashdisk ', 'harga' => 85000, 'stok' => 0, 'is_active' =>
        false],
        ];

        return view('item',['x' => $toko, 
        'kategori' => $kategori, 
        'xarray' => $xarray,
        'yarray' => $yarray,
        'items' => $items
        ]);
    }

    public function tampil()
    {
        $kategori = "Elektronik & Aksesoris";
         $items = [
        ['id' => 1, 'nama' => 'Laptop ', 'harga' => 8500000, 'stok' => 4, 'is_active' =>
        true],
        ['id' => 2, 'nama' => 'Mouse ', 'harga' => 125000, 'stok' => 15, 'is_active' =>
        true],
        ['id' => 3, 'nama' => 'Flashdisk ', 'harga' => 85000, 'stok' => 0, 'is_active' =>
        false],
        ];
        return view('item.katalog', ['items' => $items, 'kategori' => $kategori]);
    }
}

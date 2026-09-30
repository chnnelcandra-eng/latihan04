<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    // Penjumlahan
    public function add(Request $request)
    {
        $result = $request->num1 + $request->num2;
        return "Hasil Penjumlahan: " . $result;
    }

    // Pengurangan
    public function subtract(Request $request)
    {
        $result = $request->num1 - $request->num2;
        return "Hasil Pengurangan: " . $result;
    }

    // Perkalian
    public function multiply(Request $request)
    {
        $result = $request->num1 * $request->num2;
        return "Hasil Perkalian: " . $result;
    }

    // Pembagian
    public function divide(Request $request)
    {
        if ($request->num2 == 0) {
            return "Error: Tidak bisa membagi dengan nol!";
        }
        $result = $request->num1 / $request->num2;
        return "Hasil Pembagian: " . $result;
    }
}
<?php

namespace App\Http\Controllers;

class obatcontroller extends Controller
{
    public function index()
    {
        return view('dataObat.Obat');
    }

    public function resep()
    {
        return view('dataObat.resepObat');
    }
}


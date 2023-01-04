<?php

namespace App\Http\Controllers;

class listpasiencontroller extends Controller
{
    public function index()
    {
        return view('DataPasien.listPasien');
    }
}

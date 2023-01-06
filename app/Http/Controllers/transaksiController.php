<?php

namespace App\Http\Controllers;

class transaksiController extends Controller
{
    public function index()
    {
        return view('Transaksi.Transaksi');
    }

    public function datatransaksi()
    {
        return view('Transaksi.listTransaksi');
    }
}

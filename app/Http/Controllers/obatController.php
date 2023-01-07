<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use App\Models\Pasien;
use App\Models\ResepObat;
use Illuminate\Http\Request;

class obatcontroller extends Controller
{
    public function index()
    {
        return view('dataObat.Obat');
    }

    public function storeObat(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required|string|max:100',
            'price' => 'required|integer',
        ]);

        Obat::create([
            'nama_obat' => $data['name'],
            'harga' => $data['price'],
        ]);

        return redirect()->route('form.obat')->with('success_message', 'Success!');
    }

    public function resep()
    {
        $meds = Obat::all();
        $patients = Pasien::all();

        return view('dataObat.resepObat', [
            'meds' => $meds,
            'patients' => $patients,
        ]);
    }

    public function storeResep(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'keterangan' => 'required|max:500'
        ]);

        ResepObat::create([
            'id_obat' => $data['obat'],
            'id_pasien' => $data['pasien'],
            'keterangan_resep' => $data['keterangan'],
        ]);

        return redirect()->route('form.resep')->with('success_message', 'Success!');
    }
}


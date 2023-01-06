<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;

class formpasiencontroller extends Controller
{
    public function index()
    {
        return view('DataPasien.formPasien');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($data['type'] == "Dokter") {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|unique:dokter,email_dokter',
                'nohp' => 'required',
                'alamat' => 'required|max:200',
            ]);

            Dokter::create([
                'nama_dokter' => $data['name'],
                'email_dokter' => $data['email'],
                'nohp_dokter' => $data['nohp'],
                'alamat_dokter' => $data['alamat'],
            ]);
        } else {
            $request->validate([
                'name' => 'required|max:100',
                'email' => 'required|unique:pasien,email_pasien',
                'nohp' => 'required',
                'alamat' => 'required|max:200',
            ]);

            Pasien::create([
                'nama_pasien' => $data['name'],
                'email_pasien' => $data['email'],
                'nohp_pasien' => $data['nohp'],
                'alamat_pasien' => $data['alamat'],
            ]);
        }

        return redirect()->route('form.pasien')->with('success_message', 'Success!');
    }
}

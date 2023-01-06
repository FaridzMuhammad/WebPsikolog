<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use App\Models\Pasien;
use App\Models\Sesi;
use Illuminate\Http\Request;

class formDiagnosaController extends Controller
{
    public function index()
    {
        $doctors = Dokter::all();
        $patients = Pasien::all();

        return view('Diagnosa.formDiagnosa', [
            'doctors' => $doctors,
            'patients' => $patients,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'date' => 'required',
            'description' => 'required',
        ]);

        Sesi::create([
            'id_dokter' => $data['dokter'],
            'id_pasien' => $data['pasien'],
            'deskripsi_hasil' => $data['description'],
            'tanggal_sesi' => $data['date'],
            'status_sesi' => 'On Progress',
        ]);

        return redirect()->route('form.sesi')->with('success_message', 'Success!');
    }
}

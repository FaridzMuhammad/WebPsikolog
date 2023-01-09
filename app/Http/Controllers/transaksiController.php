<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Payment;
use App\Models\ResepObat;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        $patients = Pasien::all();
        $resep = ResepObat::all();

        return view('Transaksi.Transaksi', [
            'patients' => $patients,
            'resep' => $resep,
        ]);
    }

    public function storeTransaksi(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'date' => 'required|date',
            'total' => 'required|integer',
        ]);

        Payment::create([
            'id_resep_obat' => $data['resep'],
            'id_pasien' => $data['pasien'],
            'tanggal_payment' => $data['date'],
            'total_harga' => $data['total'],
        ]);

        return redirect()->route('list.transaksi')->with('success_message', 'Success!');
    }

    public function datatransaksi()
    {
        $payment = Payment::all();

        return view('Transaksi.listTransaksi', [
            'payment' => $payment,
        ]);
    }

    public function editTransaksi($id)
    {
        $patients = Pasien::all();
        $resep = ResepObat::all();
        $payment = Payment::findOrFail($id);

        return view('Transaksi.editTransaksi', [
            'patients' => $patients,
            'resep' => $resep,
            'payment' => $payment,
        ]);
    }

    public function updateTransaksi(Request $request, $id)
    {
        $data = $request->all();

        $request->validate([
            'date' => 'required|date',
            'total' => 'required|integer',
        ]);

        $transaksi = Payment::findOrFail($id);

        $transaksi->update([
            'id_resep_obat' => $data['resep'],
            'id_pasien' => $data['pasien'],
            'tanggal_payment' => $data['date'],
            'total_harga' => $data['total'],
        ]);

        return redirect()->route('list.transaksi')->with('success_message', 'Success!');
    }

    public function deleteTransaksi($id)
    {
        $transaksi = Payment::findOrFail($id);

        $transaksi->delete();

        return redirect()->route('list.transaksi')->with('success_message', 'Success!');
    }
}

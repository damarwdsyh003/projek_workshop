<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meja; // Pastikan Anda memiliki model Meja yang sesuai
use App\Models\Paket; // Pastikan Anda memiliki model Paket yang sesuai
use App\Models\Pemesanan; // Pastikan Anda memiliki model Pemesanan yang sesuai

class PemesananController extends Controller
{
    public function index()
    {
        // Ambil daftar meja yang tersedia
        $mejaTersedia = Meja::where('status', 'kosong')->get();

        // Ambil daftar paket yang tersedia
        $paketTersedia = Paket::all();

        return view('pemesanan.index', compact('mejaTersedia', 'paketTersedia'));
    }

    public function pesan(Request $request)
    {
        // Validasi data yang diinput oleh pengguna
        $this->validate($request, [
            'meja_id' => 'required',
            'paket_id' => 'required',
            // tambahkan validasi lainnya sesuai kebutuhan
        ]);

        // Buat pemesanan baru
        $pemesanan = new Pemesanan;
        $pemesanan->meja_id = $request->meja_id;
        $pemesanan->paket_id = $request->paket_id;
        // Isi data pemesanan lainnya sesuai kebutuhan

        // Simpan pemesanan
        $pemesanan->save();

        // Update status meja menjadi "dipesan"
        $meja = Meja::find($request->meja_id);
        $meja->status = 'dipesan';
        $meja->save();

        // Redirect ke halaman pemesanan sukses atau lainnya
        return redirect()->route('pemesanan.index')->with('success', 'Pemesanan berhasil dilakukan.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\Paket;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();

        return view('pemesanan.index', compact('pemesanan'));
    }

    public function create()
    {
        $pakets = Paket::all();

        return view('reservation',['pakets' => $pakets]);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $pemesanan = new Pemesanan();
        $pemesanan->id_users = $data['id_users'];
        $pemesanan->id_meja = $data['id_meja'];
        $pemesanan->id_paket = $data['id_paket'];
        $pemesanan->tanggal_pemesanan = $data['tanggal_pemesanan'];
        $pemesanan->waktu_pemesanan = $data['waktu_pemesanan'];
        $pemesanan->jumlah_tamu = $data['jumlah_tamu'];
        $pemesanan->total_harga = $data['total_harga'];
        $pemesanan->status_pemesanan = 'belum_dikonfirmasi';

        $pemesanan->save();

        return redirect()->route('reservation');
    }
}

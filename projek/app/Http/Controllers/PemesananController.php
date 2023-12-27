<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use App\Models\User;
use App\Models\Meja;
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
        $users = User::all();
        $meja = Meja::all();
        $paket = Paket::all();

        return view('pemesanan.create', compact('users', 'meja', 'paket'));
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

        return redirect()->route('pemesanan.index');
    }

    public function edit($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $users = User::all();
        $meja = Meja::all();
        $paket = Paket::all();

        return view('pemesanan.edit', compact('pemesanan', 'users', 'meja', 'paket'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->id_users = $data['id_users'];
        $pemesanan->id_meja = $data['id_meja'];
        $pemesanan->id_paket = $data['id_paket'];
        $pemesanan->tanggal_pemesanan = $data['tanggal_pemesanan'];
        $pemesanan->waktu_pemesanan = $data['waktu_pemesanan'];
        $pemesanan->jumlah_tamu = $data['jumlah_tamu'];
        $pemesanan->total_harga = $data['total_harga'];
        $pemesanan->status_pemesanan = $data['status_pemesanan'];

        $pemesanan->save();

        return redirect()->route('pemesanan.index');
    }

    public function destroy($id)
    {
        $pemesanan = Pemesanan::findOrFail($id);
        $pemesanan->delete();

        return redirect()->route('pemesanan.index');
    }
}

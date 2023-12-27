<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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

        return view('reservation', ['pakets' => $pakets]);
    }

    public function store(Request $request)
    {
        // Ensure the user is authenticated
        // if (auth()->check()) {
            // Get the authenticated user's ID
            $userId = auth()->id();

            $data = $request->all();

            $pemesanan = new Pemesanan();
            $pemesanan->id_users = $userId; // Use the authenticated user's ID
            $pemesanan->id_meja = $data['table'];
            $pemesanan->id_paket = $data['package'];
            $pemesanan->tgl_pemesanan = $data['order_date'];
            // $pemesanan->waktu_pemesanan = $data['order_time']; // Assuming you have an 'order_time' field
            // $pemesanan->jumlah_tamu = $data['number_of_guests']; // Assuming you have a 'number_of_guests' field
            // $pemesanan->total_harga = $data['total_price']; // Assuming you have a 'total_price' field
            // $pemesanan->status_pemesanan = 'belum_dikonfirmasi';

            $pemesanan->save();

            return redirect()->route('reservation');
        // } else {
            // Handle the case where the user is not authenticated
            // You may want to redirect them to the login page or show an error message
        //     return redirect()->route('login');
        // }
    }
}

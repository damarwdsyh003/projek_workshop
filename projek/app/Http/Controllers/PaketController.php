<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket;

class PaketController extends Controller
{
    /**
     * Display the package names from the paket table.
     *
     * @return \Illuminate\View\View
     */
    public function showPackageNames()
    {
        // Fetch all package names
        $pakets = Paket::pluck('nama_paket');

        // Pass the package names to the view
        return view('reservation', compact('pakets'));
    }
}

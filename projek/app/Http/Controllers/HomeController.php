<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Meja;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function facilities()
    {
        return view('facilities');
    }

    public function reservation()
    {
        $pakets = Paket::all();
        $mejas = Meja::all();

        return view('reservation',[
            'pakets' => $pakets,
            'mejas' => $mejas
        ]);
    }
    public function profile()
    {
        return view('profile');
    }
}

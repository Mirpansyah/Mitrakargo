<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function barang()
    {
        return view('landing-page/barang');
    }

    public function mobil()
    {
        return view('landing-page/mobil');
    }

    public function pindahan()
    {
        return view('landing-page/pindahan');
    }
}

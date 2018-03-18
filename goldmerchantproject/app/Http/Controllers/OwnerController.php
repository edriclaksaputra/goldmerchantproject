<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $quote = json_decode(file_get_contents('https://talaikis.com/api/quotes/random/'), true);
        // dd($quote['quote']);
        return view ('owner.welcome', compact('quote'));
    }

    public function laporanbarang()
    {
        return view ('owner.laporanbarang');
    }

    public function laporanpenjualan()
    {
        return view ('owner.laporanpenjualan');    }

    public function laporanpembelian()
    {
        return view ('owner.laporanpembelian');    }

    public function laporangadai()
    {
        return view ('owner.laporangadai');    }

    public function laporankeuangan()
    {
        return view ('owner.laporankeuangan');    }

    public function setupemployee()
    {
        return view ('owner.settup');    }
}

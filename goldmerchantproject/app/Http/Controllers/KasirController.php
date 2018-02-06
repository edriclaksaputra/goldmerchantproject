<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Pembelian;
use App\Gadaitebus;

class KasirController extends Controller
{
    public function index()
    {
    	$listPenjualan = Penjualan::where('statusvalidasi', 0)->get();
    	$listPembelian = Pembelian::where('statusvalidasi', 0)->get();
    	$listGadai = Gadaitebus::where([['status', 'belumlunas'],['statusvalidasi', 0]])->get();
    	
        return view('kasir.validasi', compact('listPenjualan', 'listPembelian', 'listGadai'));
    }
}

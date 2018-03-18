<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Penjualan;
use App\Pembelian;
use App\Gadaitebus;
use App\Employee;

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
    //Laporan Barang
    //dalam
    public function laporanbarangdalam()
    {
        $barangdalam = Barang::where('stok', 'Dalam')->get();
        return view ('owner.laporanbarang', compact('barangdalam'));
    }

    public function laporanbarangdalamedit()
    {
        $idbarang = Input::get('idbarang');
        $detailbarang = Barang::find($idbarang);
        $kondisibarang = explode(',', $detailbarang->status);
        unset($kondisibarang[count($kondisibarang)-1]);
        return view ('owner.editbarangdalam', compact('detailbarang', 'kondisibarang'));
    }
    //dalam
    public function laporanbarangbaki()
    {
        return view ('owner.laporanbarangbaki');
    }

    public function laporanbarangsepuh()
    {
        return view ('owner.laporanbarangsepuh');
    }

    public function laporanbarangrongsok()
    {
        return view ('owner.laporanbarangrongsok');
    }

    //Laporan Barang
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

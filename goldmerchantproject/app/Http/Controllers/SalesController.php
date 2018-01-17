<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Barang;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Penjualan;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function penjualan()
    {
        $databarang = null;
        return view('sales.penjualan', compact('databarang'));
    }

    public function detailbarangpenjualan()
    {
        $barcode = Input::get('barcode');
        $databarang = Barang::where('id', $barcode)->get()->first();
        if($databarang == null){
        	return redirect('penjualan')->with('error', 'Barang tidak ditemukan ! Tolong cek ketersediaan barang')->with('databarang', $databarang);
        }
        else{
        	return view('sales.penjualan', compact('databarang'));
        }
    }

    public function inputpenjualan()
    {
    	$barangjual = new Penjualan;
    	$barangjual->barangs_id = Input::get('barcodebarang');
    	$tanggalpenjualan = Input::get('tanggalpenjualan');
    	$barangjual->tanggal = Carbon::parse($tanggalpenjualan);
    	$barangjual->nama = Input::get('namacustomer');
    	$barangjual->alamat = Input::get('alamatcustomer');
    	$barangjual->namasales = Input::get('namasales');

    	$barangjual->save();

    	$barangstok = Barang::where('id', $barangjual->barangs_id)->get()->first();
    	$barangstok->stok = 'Terjual';
    	$barangstok->save();
    	return redirect('penjualan')->with('alert', 'Barang telah berhasil di checkout ! Silahkan melanjutkan transaksi lain');
    }
}

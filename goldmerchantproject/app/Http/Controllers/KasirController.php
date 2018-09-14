<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penjualan;
use App\Pembelian;
use App\Gadaitebus;
use App\Barang;
use Illuminate\Support\Facades\Input;

class KasirController extends Controller
{
    public function index()
    {
    	$listPenjualan = Penjualan::where('statusvalidasi', 0)->get();
    	$listPembelian = Pembelian::where('statusvalidasi', 0)->get();
    	$listGadai = Gadaitebus::where([['status', 'belumlunas'],['statusvalidasi', 0]])->get();
    	
        return view('kasir.validasi', compact('listPenjualan', 'listPembelian', 'listGadai'));
    }

    public function printnota($jenis, $idtransaksi){
        if($jenis == 'penjualan'){
            $transaksi = Penjualan::find($idtransaksi);
            return view('kasir.printnota', compact('transaksi'));
        }
    }
    public function printbackfunc(){
        return redirect('/validasitransaksi')->with('alert', 'Transaksi penjualan telah berhasil di validasi ! Silahkan lanjutkan transaksi lain');
    }

    public function validasi()
    {
    	$idtransaksi = Input::get('idtransaksi');
    	$jenis = Input::get('jenis');
    	$result = Input::get('result');

    	if($result == 'accept'){
    		if($jenis == 'pembelian'){
    			$transaksi = Pembelian::find($idtransaksi);
    			$transaksi->statusvalidasi = 1;
    			$transaksi->save();

    			return redirect('/validasitransaksi')->with('alert', 'Transaksi pembelian telah berhasil di validasi ! Silahkan lanjutkan transaksi lain');
    		}
    		else if($jenis == 'penjualan'){
    			$transaksi = Penjualan::find($idtransaksi);
    			$transaksi->statusvalidasi = 1;
    			$transaksi->save();
    			
    			//status barang diubah
    			$barang = Barang::find($transaksi->barangs_id);
    			$barang->stok = 'Terjual';
    			$barang->save();

                return $this->printnota($jenis, $idtransaksi);
    		}
    		else{
    			$transaksi = Gadaitebus::find($idtransaksi);
    			$transaksi->statusvalidasi = 1;
    			$transaksi->save();
    			
    			return redirect('/validasitransaksi')->with('alert', 'Transaksi gadai telah berhasil di validasi ! Silahkan lanjutkan transaksi lain');
    		}
    	}
    	else{
    		if($jenis == 'pembelian'){
    			$transaksi = Pembelian::find($idtransaksi);
    			$transaksi->delete();

    			return redirect('/validasitransaksi')->with('warning', 'Transaksi pembelian telah di cancel ! Silahkan lanjutkan transaksi lain');
    		}
    		else if($jenis == 'penjualan'){
    			$transaksi = Penjualan::find($idtransaksi);
    			$transaksi->delete();
    			
    			return redirect('/validasitransaksi')->with('warning', 'Transaksi penjualan telah di cancel ! Silahkan lanjutkan transaksi lain');
    		}
    		else{
    			$transaksi = Gadaitebus::find($idtransaksi);
    			$transaksi->delete();
    			
    			return redirect('/validasitransaksi')->with('warning', 'Transaksi gadai telah di cancel ! Silahkan lanjutkan transaksi lain');
    		}
    	}
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Barang;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use App\Penjualan;
use App\Pembelian;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //untuk penjualan sales
    public function penjualan()
    {
        $databarang = null;
        return view('sales.penjualan', compact('databarang'));
    }

    public function detailbarangpenjualan()
    {
        $barcode = Input::get('barcode');
        $databarang = Barang::where([['id', $barcode],['stok', '!=', 'Terjual']])->get()->first();
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

    //penjualan

    //untuk pembelian sales
    public function pembelian()
    {
        return view('sales.pembelian');
    }

    public function pembeliandalam()
    {
        return view('sales.pembeliandalam');
    }

    public function detailpembelianbarang()
    {
        $idPenjualan = Input::get('barcode');
        if($idPenjualan != 0){
            $detailPenjualan = Penjualan::where('id', $idPenjualan)->get()->first();
            if($detailPenjualan != null){
                return view('sales.detailpembelianbarang', compact('detailPenjualan'));
            }
            else{
                return redirect('pembeliandalam')->with('error', 'Rekap data penjualan tidak ditemukan ! Mohon cek kembali');
            }
        }
        else if($idPenjualan == 0){
            $detailPenjualan = null;
            return view('sales.detailpembelianbarang', compact('detailPenjualan'));
        }
    }

    public function inputdatapembelian()
    {
        $pembelian = new pembelian;
        $pembelian->penjualans_id = Input::get('idpenjualan');
        $pembelian->namapenjual = Input::get('namaPenjual');
        $pembelian->alamatpenjual = Input::get('alamatPenjual');
        $pembelian->jenis = Input::get('jenisbarang');
        $pembelian->namajenis = Input::get('namajenis');
        $pembelian->ukuran = Input::get('ukuran');
        $pembelian->beratasli = Input::get('beratskrg');
        $pembelian->beratpembulatan = null;
        $pembelian->hargagram = Input::get('hargabeli');
        $ongkos = Input::get('ongkos');
        $ongkoslain = Input::get('ognkoslain');
        $pembelian->totalongkos = $ongkos+$ongkoslain;
        $gram = Input::get('beratskrg');
        $hargagram = Input::get('hargabeli');
        $pembelian->totalharga = ($gram * $hargagram)-($ongkos+$ongkoslain);
        $pembelian->kadar = Input::get('kadar');
        $pembelian->kondisi = Input::get('kondisi');
        $dateformat = Input::get('tanggalbeli');
        $pembelian->tanggalmasuk = Carbon::parse($dateformat);
        $pembelian->tanggalkeluar = null;
        $pembelian->namasales = Input::get('namasales');
        
        $pembelian->save();

        return redirect('pembelian')->with('alert', 'Pembelian barang berhasil dilakukan ! Silahkan melanjutkan transaksi');
    }
    //pembelian
}

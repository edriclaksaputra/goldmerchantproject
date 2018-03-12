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
use App\Gadaitebus;
use App\Employee;

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

    public function usercheck()
    {
        $page = Input::get('page');
        $error = null;
        return view('sales.checkuser', compact('page', 'error'));
    }

    public function usercheckvalidation()
    {
        $passcode = Input::get('passcode');
        $page = Input::get('page');
        if($passcode == null){
            $error = "Input passcode kosong ! Mohon cek kembali";
            return view('sales.checkuser', compact('page', 'error'));
        }
        else{
            $employeeDetail = Employee::where('passcode', $passcode)->get()->first();
            if($employeeDetail == null){
                $error = "Employee tidak ditemukan ! Mohon cek kembali";
                return view('sales.checkuser', compact('page', 'error'));
            }
            else{
                if($page == "jual"){
                    return redirect('/penjualan')->with('employeeDetail', $employeeDetail);
                }
                else if($page == "beli"){
                    return redirect('/pembelian')->with('employeeDetail', $employeeDetail);
                }
                else if($page == "gadai"){
                }
                else if($page == "tebus"){
                }
            }
        }
    }

    public function detailbarangpenjualan()
    {
        $detailEmployee = Input::get('detailEmployee');
        $detailEmployeeJson = json_decode($detailEmployee);

        $barcode = Input::get('barcode');
        $databarang = Barang::where([['id', $barcode],['stok', '!=', 'Terjual']])->get()->first();
        if($databarang == null){
        	return redirect('penjualan')->with('error', 'Barang tidak ditemukan ! Tolong cek ketersediaan barang')->with('databarang', $databarang);
        }
        else{
        	return view('sales.penjualan', compact('databarang', 'detailEmployeeJson'))->with('employeeDetail', $detailEmployeeJson);
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
        $barangjual->statusvalidasi = 0;
    	$barangjual->save();

    	// $barangstok = Barang::where('id', $barangjual->barangs_id)->get()->first();
    	// $barangstok->stok = 'Terjual';
    	// $barangstok->save();
    	return redirect('penjualan')->with('alert', 'Barang telah berhasil di checkout ! Silahkan lanjutkan pembayaran di kasir');
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
        $detailEmployee = Input::get('detailEmployee');
        $detailEmployeeJson = json_decode($detailEmployee);

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
            return view('sales.detailpembelianbarang', compact('detailPenjualan', 'detailEmployeeJson'));
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
        $pembelian->statusvalidasi = 0;
        
        $pembelian->save();

        return redirect('pembelian')->with('alert', 'Pembelian barang berhasil dilakukan ! Silahkan lanjutkan transaksi di kasir');
    }
    //pembelian

    //controller penggadaian dan tebus
    public function gadai()
    {
        return view('sales.penggadaian');
    }

    public function inputdetailgadai(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'totalpinjam' => 'required|integer|',
        ])->validate();

        $gadai = new Gadaitebus;
        $tanggalgadai = Input::get('tanggalgadai');
        $gadai->tanggalgadai = Carbon::parse($tanggalgadai);
        $gadai->tanggaltebus = null;
        $gadai->namapenggadai = Input::get('nama');
        $gadai->namabarang = Input::get('jaminan');
        $gadai->totalpinjam = Input::get('totalpinjam');
        $gadai->alamat = Input::get('alamat');
        $gadai->notelp = Input::get('notelp');
        $gadai->status = 'belumlunas';
        $gadai->salesgadai = Input::get('namasales');
        $gadai->salestebus = null;
        $gadai->bunga = null;
        $gadai->totalpengembalian = null;
        $gadai->statusvalidasi = 0;
        $gadai->save();

        return redirect('gadai')->with('alert', 'Detail gadai berhasil di input ! Silahkan claim pinjaman di kasir');
    }

    public function tebus()
    {
        return view('sales.penebusan');
    }

    public function detailtebus()
    {
        $barcode = Input::get('barcode');
        $detailgadai = Gadaitebus::find($barcode);
        if($detailgadai == null){
            return redirect('tebus')->with('error', 'Detail Gadai tidak ditemukan ! Mohon cek kembali');
        }
        else{
            if($detailgadai->status == 'lunas'){
                return redirect('tebus')->with('error', 'Status gadai telah selesai ! Mohon cek kembali');
            }
            else{
                return view('sales.detailtebus', compact('detailgadai'));
            }
        }
    }

    public function checkouttebus()
    {
        $barcode = Input::get('barcode');
        $detailtebus = Gadaitebus::find($barcode);
        $tanggaltebus = Input::get('tanggaltebus');
        $detailtebus->tanggaltebus = Carbon::parse($tanggaltebus);
        $detailtebus->salestebus = Input::get('salestebus');
        $detailtebus->bunga = Input::get('bunga');
        $detailtebus->totalpengembalian = Input::get('totalbayar');
        $detailtebus->status = 'lunas';
        $detailtebus->save();

        return redirect('tebus')->with('alert', 'Detail tebus berhasil di checkout ! Silahkan melanjutkan transaksi');
    }
    //penggadaian dan tebus
}

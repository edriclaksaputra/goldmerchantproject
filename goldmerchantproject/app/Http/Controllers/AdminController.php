<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Barang;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function databaki()
    {
        return view('admin.databaki');
    }

    public function inputbarangbaru(){
        return view('admin.inputbaru');
    }

    public function insertbarangbaru(Request $request){

        $validator = Validator::make($request->all(), [
            'jenisbarang' => 'required|string',
            'ukuranbarang' => 'required|integer',
            'namabarang' => 'required|string',
            'beratasli' => 'required|between:0,99.99',
            'beratpembulatan' => 'required|between:0,99.99',
            'kadar' => 'required|string',
            'namasupplier' => 'required|string',
            'hargajual' => 'required|between:0,99.99',
            'tanggalmasuk' => 'required|date',
            'baki' => 'required',
        ])->validate();

        $newBarang = new Barang;
        $newBarang->jenis = Input::get('jenisbarang');
        $newBarang->ukuran = Input::get('ukuranbarang');
        $newBarang->namajenis = Input::get('namabarang');
        $newBarang->beratasli = Input::get('beratasli');
        $newBarang->beratpembulatan = Input::get('beratpembulatan');
        $newBarang->kadar = Input::get('kadar');
        $newBarang->hargagram = Input::get('hargajual');
        $harga = Input::get('hargajual');
        $gram = Input::get('beratpembulatan');
        $newBarang->totalharga = $harga * $gram;
        $newBarang->supplier = Input::get('namasupplier');
        $newBarang->stok = Input::get('baki');
        $kondisi = Input::get('kondisi');
        $newBarang->status = "";
        for ($i=0; $i < count($kondisi); $i++) {
            $newBarang->status = $newBarang->status.$kondisi[$i].',';
        }
        $dateformat = Input::get('tanggalmasuk');
        $newBarang->tanggalmasuk = Carbon::parse($dateformat);
        $newBarang->keterangan = Input::get('keterangan');
        $newBarang->save();

        return redirect('inputbaru')->with('alert', 'Barang baru telah berhasil disimpan ! Silahkan melanjutkan pekerjaan anda');
    }

    public function inputbaki(){
        $listbarang = Barang::where('stok', '=', 'Dalam')->get();
        return view('admin.inputbaki', compact('listbarang'));
    }

    public function insertbarangbaki(){
        $kodebarang = Input::get('kodebarang');
        $tanggalkeluar = Input::get('tanggalkeluar');
        $nomerbaki = Input::get('nomerbaki');
        for ($i=0; $i < count($kodebarang); $i++) {
            if(array_key_exists($i, $kodebarang)){
                $barang = Barang::where('id', $kodebarang[$i])->get()->first();
                if($barang ==  null){
                    return redirect('inputbaki')->with('error', 'Barcode barang tidak ditemukan ! Mohon cek kembali');
                }
                $barang->stok = 'Luar'.$nomerbaki[$i];
                $barang->tanggalkeluar = Carbon::parse($tanggalkeluar[$i]);
                $barang->save();
            }
        }
        
        return redirect('inputbaki')->with('alert', 'Barang telah diupdate ke stok luar ! Silahkan pindahkan barang ke dalam baki dan lanjutkan perkerjaan anda');
    }

    // public function cancelbarangbaki(){
    //     $idbarangcancel = Input::get('idbarangcancel');
    //     $barangcancel = Barang::where('id', $idbarangcancel)->get()->first();
    //     $barangcancel->stok = 'Dalam';
    //     $barangcancel->save();

    //     return redirect('inputbaki')->with('alert', 'Barang telah dicancel masuk baki ! Silahkan melanjutkan pekerjaan anda');
    // }
}

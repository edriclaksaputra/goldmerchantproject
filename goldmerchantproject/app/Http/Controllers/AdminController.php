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

        return redirect('inputbaru')->with('alert', 'Barang baru telah berhasil disimpan ! Silahkan melanjutkan pekerjaan anda');;
    }

    public function inputbaki(){
        return view('admin.inputbaki');
    }
}

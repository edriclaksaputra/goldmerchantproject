<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use App\Barang;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use \Milon\Barcode\DNS1D;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function databaki()
    {
        $databaki = null;
        return view('admin.databaki', compact('databaki'));
    }

    public function detaildatabaki()
    {
        $noBaki = Input::get('nomorbaki');
        $databaki = Barang::where('stok', $noBaki)->get();
        return view('admin.databaki', compact('databaki'));
    }

    public function inputbarangbaru(){
        return view('admin.inputbaru');
    }

    public function insertbarangbaru(Request $request){

        $validator = Validator::make($request->all(), [
            'jenisbarang' => 'required|string',
            'ukuranbarang' => 'required|string',
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
        $beratasli = Input::get('beratasli');
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

        if(!empty($_POST['photo'])){
          $encoded_data = $_POST['photo'];
            $binary_data = base64_decode( $encoded_data );

            // save to server (beware of permissions // set ke 775 atau 777)
            $namafoto = uniqid().".jpeg";
            $result = file_put_contents('../public/images/products/'.$namafoto, $binary_data );
            $newBarang->foto = '/images/products/'.$namafoto;
            if (!$result) die("Could not save image!  Check file permissions.");
        }
        $newBarang->save();
        $barangPrint = Barang::where('created_at', Carbon::now())->first();
        $this->print($barangPrint);

        return redirect('inputbaru')->with('alert', 'Barang telah berhasil di update ! Silahkan melanjutkan pekerjaan anda');
    }

    public function inputbaki(){
        $listbarang = Barang::where('stok', '=', 'Dalam')->get();
        return view('admin.inputbaki', compact('listbarang'));
    }

    public function insertbarangbaki(){
        $kodebarang = Input::get('kodebarang');
        if($kodebarang == null){
            return redirect('inputbaki')->with('error', 'Barang tidak ada yang di-Input ! Mohon cek kembali');
        }
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

    public function print($barangprint){

        $int = $barangprint->id;
        $biner = decbin($int);
        $binerlong = str_pad($biner, 8, '0', STR_PAD_LEFT);
        $d = new DNS1D();
        $d->getBarcodePNG($binerlong, "C39");

        
    }
}

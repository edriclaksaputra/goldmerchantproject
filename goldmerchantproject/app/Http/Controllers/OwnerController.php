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

    public function laporanbarangdalameditproses()
    {
        $idbarang = Input::get('idbarang');
        $barangedit = Barang::find($idbarang);

        $barangedit->jenis = Input::get('jenisbarang');
        $barangedit->ukuran = Input::get('ukuran');
        $barangedit->namajenis = Input::get('namabarang');
        $barangedit->beratasli = Input::get('beratasli');
        $barangedit->beratpembulatan = Input::get('beratbulat');
        $barangedit->kadar = Input::get('kadar');
        $barangedit->supplier = Input::get('supplier');
        $barangedit->hargagram = Input::get('hargajual');

        $kondisi = Input::get('kondisi');
        $barangedit->status = "";
        for ($i=0; $i < count($kondisi); $i++) {
            $barangedit->status = $barangedit->status.$kondisi[$i].',';
        }
        $barangedit->stok = Input::get('stokbarang');
        $barangedit->keterangan = Input::get('keterangan');

        $barangedit->save();

        return redirect('/laporanbarang.dalam')->with('alert', 'Barang telah berhasil di update ! Silahkan melanjutkan pekerjaan anda');
    }
    //dalam
    //baki
    public function laporanbarangbaki()
    {
        $barangbaki = Barang::where('stok', '!=', 'Dalam')->get();
        return view ('owner.laporanbarangbaki', compact('barangbaki'));
    }

    public function laporanbarangbakiedit()
    {
        $idbarang = Input::get('idbarang');
        $detailbarang = Barang::find($idbarang);
        $kondisibarang = explode(',', $detailbarang->status);
        unset($kondisibarang[count($kondisibarang)-1]);
        return view ('owner.editbarangbaki', compact('detailbarang', 'kondisibarang'));
    }

    public function laporanbarangbakieditproses()
    {
        $idbarang = Input::get('idbarang');
        $barangedit = Barang::find($idbarang);

        $barangedit->jenis = Input::get('jenisbarang');
        $barangedit->ukuran = Input::get('ukuran');
        $barangedit->namajenis = Input::get('namabarang');
        $barangedit->beratasli = Input::get('beratasli');
        $barangedit->beratpembulatan = Input::get('beratbulat');
        $barangedit->kadar = Input::get('kadar');
        $barangedit->supplier = Input::get('supplier');
        $barangedit->hargagram = Input::get('hargajual');

        $kondisi = Input::get('kondisi');
        $barangedit->status = "";
        for ($i=0; $i < count($kondisi); $i++) {
            $barangedit->status = $barangedit->status.$kondisi[$i].',';
        }
        $barangedit->stok = Input::get('stokbarang');
        $barangedit->keterangan = Input::get('keterangan');

        $barangedit->save();

        return redirect('/laporanbarang.baki')->with('alert', 'Barang telah berhasil di update ! Silahkan melanjutkan pekerjaan anda');
    }
    //baki
    public function laporanbarangsepuh()
    {
        $barangsepuh = Pembelian::where('kondisi', 'Sepuh')->get();
        $berattotal = 0;
        for ($i=0; $i < count($barangsepuh); $i++) {
            $berattotal = $berattotal + $barangsepuh[$i]->beratasli;
        }
        return view ('owner.laporanbarangsepuh', compact('barangsepuh', 'berattotal'));
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

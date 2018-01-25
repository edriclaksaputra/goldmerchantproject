<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;

class Penjualan extends Model
{
    protected $table = 'penjualans';

    public function barangs(){
        return $this->belongsTo('App\Barang');
    }
}

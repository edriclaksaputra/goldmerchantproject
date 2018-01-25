<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Penjualan;

class Barang extends Model
{
    protected $table = 'barangs';

    public function penjualans(){
    	return $this->hasOne('App\Penjualan');
    }
}

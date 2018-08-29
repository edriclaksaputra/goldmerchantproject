<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelians';

    public function kondisibarangs(){
        return $this->belongsTo('App\Kondisibarang');
    }
}

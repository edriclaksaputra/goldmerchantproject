<?php

namespace App\Exports;

use App\Listprintbarang;
use Maatwebsite\Excel\Concerns\FromCollection;

class Listbarangprint implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Listprintbarang::all();
    }
}

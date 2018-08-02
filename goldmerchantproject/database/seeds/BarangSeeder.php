<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
        	'jenis'=>'Anting',
        	'namajenis'=>'Anting Liontin',
        	'ukuran'=>14,
        	'beratasli'=>15.000,
        	'beratpembulatan'=>15.000,
        	'hargagram'=>450000,
        	'totalharga'=>6750000.000,
        	'supplier'=>'UBS',
        	'kadar'=>375,
        	'foto'=>null,
        	'stok'=>'Dalam',
            'status'=>'Baru,',
            'statusprinted'=>0,
        	'tanggalmasuk'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'tanggalkeluar'=>null,
        	'keterangan'=>null,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('barangs')->insert([
        	'jenis'=>'Cincin',
        	'namajenis'=>'Cincin Berlian',
        	'ukuran'=>14,
        	'beratasli'=>20.000,
        	'beratpembulatan'=>20.000,
        	'hargagram'=>550000,
        	'totalharga'=>11000000.000,
        	'supplier'=>'UBS',
        	'kadar'=>375,
        	'foto'=>null,
        	'stok'=>'Dalam',
        	'status'=>'Baru,',
            'statusprinted'=>0,
        	'tanggalmasuk'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'tanggalkeluar'=>null,
        	'keterangan'=>null,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('barangs')->insert([
        	'jenis'=>'Gigi Palsu',
        	'namajenis'=>'Gigi Palsu Emas',
        	'ukuran'=>10,
        	'beratasli'=>25.000,
        	'beratpembulatan'=>25.000,
        	'hargagram'=>650000,
        	'totalharga'=>16250000.000,
        	'supplier'=>'UBS',
        	'kadar'=>375,
        	'foto'=>null,
        	'stok'=>'Dalam',
        	'status'=>'Baru,',
            'statusprinted'=>0,
        	'tanggalmasuk'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'tanggalkeluar'=>null,
        	'keterangan'=>null,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('barangs')->insert([
        	'jenis'=>'Kalung',
        	'namajenis'=>'Kalung Liontin',
        	'ukuran'=>22,
        	'beratasli'=>19.700,
        	'beratpembulatan'=>20.00,
        	'hargagram'=>650000,
        	'totalharga'=>13000000.000,
        	'supplier'=>'UBS',
        	'kadar'=>375,
        	'foto'=>null,
        	'stok'=>'Dalam',
        	'status'=>'Baru,',
            'statusprinted'=>0,
        	'tanggalmasuk'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'tanggalkeluar'=>null,
        	'keterangan'=>null,
        	'created_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        	'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class ListbarangprintSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('listprintbarangs')->insert([
        	'id' => 'id',
        	'jenis'=>'jenis',
        	'namajenis'=>'namajenis',
        	'ukuran'=>'ukuran',
        	'beratasli'=>'beratasli',
        	'beratpembulatan'=>'beratpembulatan',
        	'hargagram'=>'hargagram',
        	'totalharga'=>'totalharga',
        	'supplier'=>'supplier',
        	'kadar'=>'kadar',
        ]);
    }
}

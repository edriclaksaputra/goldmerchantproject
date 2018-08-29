<?php

use Illuminate\Database\Seeder;

class KondisibarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kondisibarangs')->insert([
        	'kondisi'=>'Siap Jual',
        ]);
        DB::table('kondisibarangs')->insert([
        	'kondisi'=>'Sepuh',
        ]);
        DB::table('kondisibarangs')->insert([
        	'kondisi'=>'Lebur',
        ]);
        DB::table('kondisibarangs')->insert([
        	'kondisi'=>'Pekok',
        ]);
        DB::table('kondisibarangs')->insert([
        	'kondisi'=>'Rusak',
        ]);
    }
}

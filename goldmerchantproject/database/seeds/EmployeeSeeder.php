<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
        	'name'=>'Edric Laksa Putra',
        	'jabatan'=>'Pegawai Sales 1',
            'passcode'=> '123456',
        ]);
        DB::table('employees')->insert([
            'name'=>'Silvi Caringin',
            'jabatan'=>'Pegawai Sales 2',
            'passcode'=> '456789',
        ]);
        DB::table('employees')->insert([
            'name'=>'Erik Caringin',
            'jabatan'=>'Pegawai Sales 3',
            'passcode'=> '234567',
        ]);

    }
}

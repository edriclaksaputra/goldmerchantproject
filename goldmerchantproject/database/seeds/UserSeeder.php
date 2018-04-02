<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Edric Laksa',
        	'email'=>'edricadmin@gmail.com',
            'password'=> Hash::make('edric123'),
            'job'=> 'Admin',
        ]);
        DB::table('users')->insert([
            'name'=>'Edric Laksa',
            'email'=>'edricsales@gmail.com',
            'password'=> Hash::make('edric123'),
            'job'=> 'Sales',
        ]);
        DB::table('users')->insert([
            'name'=>'Edric Laksa',
            'email'=>'edrickasir@gmail.com',
            'password'=> Hash::make('edric123'),
            'job'=> 'Kasir',
        ]);DB::table('users')->insert([
            'name'=>'Edric Laksa',
            'email'=>'edricowner@gmail.com',
            'password'=> Hash::make('edric123'),
            'job'=> 'Owner',
        ]);
    }
}

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
        	'name'=>'Erik Lokasurya',
        	'email'=>'eriklokasurya@gmail.com',
            'password'=> Hash::make('erikerik123'),
            'job'=> 'Admin',
        ]);
        DB::table('users')->insert([
            'name'=>'Erik Lokasurya',
            'email'=>'eriksales@gmail.com',
            'password'=> Hash::make('erikerik123'),
            'job'=> 'Sales',
        ]);
        DB::table('users')->insert([
            'name'=>'Erik Lokasurya',
            'email'=>'erikkasir@gmail.com',
            'password'=> Hash::make('erikerik123'),
            'job'=> 'Kasir',
        ]);
    }
}

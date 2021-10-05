<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke table user
        DB::table('users')->insert([
            'id'=>'1',
            'name'=>'User',
            'gender'=>'Female',
            'phonenumber'=>'081542743321',
            'unit'=>'Damar 12-8',
            'address'=>'Apartemen Pantai Mutiara Lantai 12 No.8
            Jl. Raya Pantai Mutiara Blok R-1, Pluit 14450',
            'DOB'=>'1997-11-11',
            'username'=>'user',
            'email'=>'user@user.com',
            'password' => bcrypt('user'),

        ]);
    }
}

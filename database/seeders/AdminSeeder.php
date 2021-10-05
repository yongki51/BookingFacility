<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'id'=>'1',
            'name'=>'Admin',
            'gender'=>'Female',
            'DOB'=>'1992-10-10',
            'username'=>'admin',
            'email'=>'admin@admin.com',
            'password' => bcrypt('admin'),

        ]);
    }
}

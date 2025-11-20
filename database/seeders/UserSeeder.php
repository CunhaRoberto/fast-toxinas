<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.S
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Roberto Cunha',
            'email'=>'rcunha@live.com',
            'password'=>Hash::make(123456)
        ]);
    }
}

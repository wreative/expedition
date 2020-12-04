<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            [
                'id' => '1',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make(1234567890),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'photo' => 'avatar-1.png',
                'agen' => '0',
                'previleges' => '1'
            ],
            [
                'id' => '2',
                'name' => 'Agen Batubeling',
                'email' => 'batubeling@gmail.com',
                'password' => Hash::make(1234567890),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'photo' => 'avatar-1.png',
                'agen' => '1',
                'previleges' => '2'
            ]
        ]);
    }
}

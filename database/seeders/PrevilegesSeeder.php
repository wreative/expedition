<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrevilegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('previleges')->insert([
            [
                'id' => '1',
                'name' => 'Administrator'
            ],
            [
                'id' => '2',
                'name' => 'Agen'
            ]
        ]);
    }
}

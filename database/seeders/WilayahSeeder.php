<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wilayah')->insert([
            [
                'id' => '1',
                'name' => 'Surabaya',
                'code' => '001-SBY-01',
            ],
            [
                'id' => '2',
                'name' => 'Sidoarjo',
                'code' => '002-SDA-01',
            ],
            [
                'id' => '3',
                'name' => 'Gresik',
                'code' => '003-GRS-01',
            ]
        ]);
    }
}

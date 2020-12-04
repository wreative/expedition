<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracking')->insert([
            [
                'id' => '1',
                'name' => 'Barang Berada Di Agen BatuBeling'
            ],
            [
                'id' => '2',
                'name' => 'Barang Telah Diterima Penerima'
            ]
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliverySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('layanan_pengiriman')->insert([
            [
                'id' => '1',
                'name' => 'Domestik Ekspress'
            ],
            [
                'id' => '2',
                'name' => 'City Courier'
            ],
            [
                'id' => '3',
                'name' => 'Prioritas'
            ],
            [
                'id' => '4',
                'name' => 'Tujuan Khusus'
            ]
        ]);
    }
}

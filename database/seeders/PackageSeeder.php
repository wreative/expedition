<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            [
                'id' => '1',
                'tipe' => 'Paket',
                'berat_pertama' => '7000',
                'berat_berikut' => '5000',
                'wilayah_id' => '1'
            ],
            [
                'id' => '2',
                'tipe' => 'Paket',
                'berat_pertama' => '1200',
                'berat_berikut' => '7000',
                'wilayah_id' => '2'
            ],
            [
                'id' => '3',
                'tipe' => 'Paket',
                'berat_pertama' => '1200',
                'berat_berikut' => '7000',
                'wilayah_id' => '3'
            ],
            [
                'id' => '4',
                'tipe' => 'Makanan',
                'berat_pertama' => '17000',
                'berat_berikut' => '10000',
                'wilayah_id' => '1'
            ],
            [
                'id' => '5',
                'tipe' => 'Makanan',
                'berat_pertama' => '25000',
                'berat_berikut' => '15000',
                'wilayah_id' => '2'
            ],
            [
                'id' => '6',
                'tipe' => 'Makanan',
                'berat_pertama' => '25000',
                'berat_berikut' => '15000',
                'wilayah_id' => '3'
            ],
            [
                'id' => '7',
                'tipe' => 'Tart',
                'berat_pertama' => '30000',
                'berat_berikut' => '10000',
                'wilayah_id' => '1'
            ],
            [
                'id' => '8',
                'tipe' => 'Tart',
                'berat_pertama' => '35000',
                'berat_berikut' => '15000',
                'wilayah_id' => '2'
            ],
            [
                'id' => '9',
                'tipe' => 'Tart',
                'berat_pertama' => '35000',
                'berat_berikut' => '15000',
                'wilayah_id' => '3'
            ],
        ]);
    }
}

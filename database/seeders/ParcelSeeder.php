<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parcel')->insert([
            [
                'id' => '1',
                'tipe' => 'Small',
                'harga' => '15000',
                'wilayah_id' => '1',
            ],
            [
                'id' => '2',
                'tipe' => 'Medium',
                'harga' => '20000',
                'wilayah_id' => '1',
            ],
            [
                'id' => '3',
                'tipe' => 'Large',
                'harga' => '30000',
                'wilayah_id' => '1',
            ],
            [
                'id' => '4',
                'tipe' => 'Small',
                'harga' => '20000',
                'wilayah_id' => '2',
            ],
            [
                'id' => '5',
                'tipe' => 'Medium',
                'harga' => '25000',
                'wilayah_id' => '2',
            ],
            [
                'id' => '6',
                'tipe' => 'Large',
                'harga' => '35000',
                'wilayah_id' => '2',
            ],
            [
                'id' => '7',
                'tipe' => 'Small',
                'harga' => '20000',
                'wilayah_id' => '3',
            ],
            [
                'id' => '8',
                'tipe' => 'Medium',
                'harga' => '25000',
                'wilayah_id' => '3',
            ],
            [
                'id' => '9',
                'tipe' => 'Large',
                'harga' => '35000',
                'wilayah_id' => '3',
            ],
        ]);
    }
}

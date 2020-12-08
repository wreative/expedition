<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokumen')->insert([
            [
                'id' => '1',
                'retail' => '3000',
                'kuantitas' => '2500',
                'wilayah_id' => '1'
            ],
            [
                'id' => '2',
                'retail' => '3000',
                'kuantitas' => '5000',
                'wilayah_id' => '2'
            ],
            [
                'id' => '3',
                'retail' => '3000',
                'kuantitas' => '5000',
                'wilayah_id' => '3'
            ]
        ]);
    }
}

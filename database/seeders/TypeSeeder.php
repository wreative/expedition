<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jenis_barang')->insert([
            [
                'id' => '1',
                'name' => 'Paket'
            ],
            [
                'id' => '2',
                'name' => 'Dokumen'
            ]
        ]);
    }
}

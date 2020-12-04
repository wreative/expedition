<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AgenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agen')->insert([
            [
                'id' => '1',
                'name' => 'Batubeling Agen',
                'address' => 'Jalan Kenjeran',
                'code' => '449',
                'tlp' => '+62 8937'
            ]
        ]);
    }
}

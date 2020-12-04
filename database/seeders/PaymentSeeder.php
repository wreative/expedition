<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembayaran')->insert([
            [
                'id' => '1',
                'name' => 'Tunai'
            ],
            [
                'id' => '2',
                'name' => 'COD'
            ],
            [
                'id' => '3',
                'name' => 'Tagihan'
            ]
        ]);
    }
}

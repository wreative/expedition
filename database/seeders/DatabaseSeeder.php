<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            DeliverySeeder::class,
            PaymentSeeder::class,
            TypeSeeder::class,
            PrevilegesSeeder::class,
            AgenSeeder::class,
            StatusSeeder::class,
            TrackingSeeder::class,
            WilayahSeeder::class,
            DocumentSeeder::class,
            PackageSeeder::class,
            ParcelSeeder::class
        ]);
    }
}

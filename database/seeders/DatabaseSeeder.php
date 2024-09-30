<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([

            AdminsTableSeeder::class,
            AdminSeeder::class,
            BrandSeeder::class,
            CategorySeeder::class,
            PackSeeder::class,
            PaymentMethodSeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            SaleSeeder::class,
            UserSeeder::class,

        ]);
    }
}

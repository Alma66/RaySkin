<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SalesTableSeeder extends Seeder
{
    public function run()
    {
        $sales = [
            ['user_id' => 24, 'total' => 45.99, 'sale_date' => Carbon::now()->subDays(5), 'payment_method_id' => 1],
            ['user_id' => 25, 'total' => 120.50, 'sale_date' => Carbon::now()->subDays(7), 'payment_method_id' => 2],
            ['user_id' => 22, 'total' => 30.00, 'sale_date' => Carbon::now()->subDays(10), 'payment_method_id' => 3],
            ['user_id' => 27, 'total' => 85.75, 'sale_date' => Carbon::now()->subDays(2), 'payment_method_id' => 1],
            ['user_id' => 12, 'total' => 60.40, 'sale_date' => Carbon::now()->subDays(15), 'payment_method_id' => 2],
            ['user_id' => 10, 'total' => 200.99, 'sale_date' => Carbon::now()->subDays(8), 'payment_method_id' => 3],
            ['user_id' => 11, 'total' => 90.25, 'sale_date' => Carbon::now()->subDays(12), 'payment_method_id' => 1],
            ['user_id' => 17, 'total' => 55.00, 'sale_date' => Carbon::now()->subDays(6), 'payment_method_id' => 2],
            ['user_id' => 20, 'total' => 120.00, 'sale_date' => Carbon::now()->subDays(9), 'payment_method_id' => 3],
            ['user_id' => 15, 'total' => 75.80, 'sale_date' => Carbon::now()->subDays(4), 'payment_method_id' => 1],
            ['user_id' => 4, 'total' => 140.50, 'sale_date' => Carbon::now()->subDays(11), 'payment_method_id' => 2],
            ['user_id' => 21, 'total' => 45.60, 'sale_date' => Carbon::now()->subDays(3), 'payment_method_id' => 3],
            ['user_id' => 19, 'total' => 99.90, 'sale_date' => Carbon::now()->subDays(13), 'payment_method_id' => 1],
            ['user_id' => 13, 'total' => 30.25, 'sale_date' => Carbon::now()->subDays(14), 'payment_method_id' => 2],
            ['user_id' => 26, 'total' => 80.00, 'sale_date' => Carbon::now()->subDays(16), 'payment_method_id' => 3],
 ];

        DB::table('sales')->insert($sales);
    }
}

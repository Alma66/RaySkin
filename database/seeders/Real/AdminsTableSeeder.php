<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admins')->insert([
            [
                'name' => 'Alice Johnson',
                'email' => 'alice.johnson@gmail.com',
                'password' => Hash::make('password1'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'email' => 'bob.smith@hotmail.com',
                'password' => Hash::make('password2'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carol Davis',
                'email' => 'carol.davis@gmail.com',
                'password' => Hash::make('password3'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Wilson',
                'email' => 'david.wilson@gmail.com',
                'password' => Hash::make('password4'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eva Martinez',
                'email' => 'eva.martinez@hotmail.com',
                'password' => Hash::make('password5'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

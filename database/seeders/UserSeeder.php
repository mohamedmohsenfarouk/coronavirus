<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'email' => Str::random(10) . '@gmail.com',
                    'country' => 'usa',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'email' => Str::random(10) . '@gmail.com',
                    'country' => 'brazil',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'email' => Str::random(10) . '@gmail.com',
                    'country' => 'france',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
                [
                    'email' => Str::random(10) . '@gmail.com',
                    'country' => 'egypt',
                    'created_at' => date("Y-m-d H:i:s"),
                ],
            ]
        );
    }
}

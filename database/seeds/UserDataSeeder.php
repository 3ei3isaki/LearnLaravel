<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Mei',
                'email' => 'mei.misaki@outlook.com.vn',
                'password' => '123456789'
            ],
            [
                'name' => 'Mei1',
                'email' => 'mei.misaki@outlook.com.vn',
                'password' => '123456789'
            ]
        ]);
    }
}

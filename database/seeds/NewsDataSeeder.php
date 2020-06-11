<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            [
                'cate_id' => '1',
                'title' => 'Test 1',
                'info' => 'Công an',
                'description' => 'Đây là test data',
                'url' => 'abc-xyz.com'
            ],
            [
                'cate_id' => '2',
                'title' => 'Test 1',
                'info' => 'Công an',
                'description' => 'Đây là test data',
                'url' => 'abc-xyz.com'
            ],
            [
                'cate_id' => '3',
                'title' => 'Test 1',
                'info' => 'Công an',
                'description' => 'Đây là test data',
                'url' => 'abc-xyz.com'
            ],
            [
                'cate_id' => '2',
                'title' => 'Test 1',
                'info' => 'Công an',
                'description' => 'Đây là test data',
                'url' => 'abc-xyz.com'
            ],
        ]);
    }
}

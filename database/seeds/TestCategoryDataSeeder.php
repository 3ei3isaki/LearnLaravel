<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestCategoryDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([
            ['name' => 'Xã hội'],
            ['name' => 'Kinh tế'],
            ['name' => 'Văn hóa']
        ]);
    }
}

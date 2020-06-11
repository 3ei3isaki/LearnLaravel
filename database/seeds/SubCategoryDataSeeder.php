<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoryDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sub_categorys')->insert([
            [
                'cate_id' => '3',
                'name' => 'Thời sự'
            ],
            [
                'cate_id' => '3',
                'name' => 'Giao thông'
            ],
            [
                'cate_id' => '2',
                'name' => 'Học bổng - Du học'
            ],
            [
                'cate_id' => '2',
                'name' => 'Đào tạo - Thi cử'
            ],
        ]);
    }
}

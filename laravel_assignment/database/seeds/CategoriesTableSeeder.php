<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
            'id'=>1,
            'name'=>'Quần bò',
            'description'=>'Danh mục các loại quần bò',
            'images'=>'https://res.cloudinary.com/vvhatever/image/upload/c_fit,h_150,w_150/1534837851.png'
            ],
            [
                'id'=>2,
                'name'=>'Áo khoác',
                'description'=>'Danh mục các loại áo khoác bò',
                'images'=>'https://res.cloudinary.com/vvhatever/image/upload/c_fit,h_150,w_150/1534835135.png'
            ],
            [
                'id'=>3,
                'name'=>'Giày thể thao',
                'description'=>'Danh mục các loại giày thể thao',
                'images'=>'https://res.cloudinary.com/vvhatever/image/upload/c_fit,h_150,w_150/1534835182.png'
            ],
            [
                'id'=>4,
                'name'=>'Mũ lưỡi trai',
                'description'=>'Danh mục các loại mũ lưỡi trai',
                'images'=>'https://res.cloudinary.com/vvhatever/image/upload/c_fit,h_150,w_150/1534835254.png'
            ],
            [
                'id'=>5,
                'name'=>'Thắt lưng',
                'description'=>'Danh mục các loại thắt lưng',
                'images'=>'https://res.cloudinary.com/vvhatever/image/upload/c_fit,h_150,w_150/1534835310.png'
            ],
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

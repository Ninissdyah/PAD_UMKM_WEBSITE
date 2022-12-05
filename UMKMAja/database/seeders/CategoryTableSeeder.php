<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryRecord = [
            ['id'=>1, 'parent_id' => 1, 'category_name'=>'Food & Drink', 'url'=>'food&drink'],
            ['id'=>2, 'parent_id' => 1, 'category_name'=>'Clothes', 'url'=>'clothes'],
            ['id'=>3, 'parent_id' => 1, 'category_name'=>'Art', 'url'=>'art'],
            ['id'=>4, 'parent_id' => 1, 'category_name'=>'Furniture', 'url'=>'furniture'],
            ['id'=>5, 'parent_id' => 1, 'category_name'=>'Electronic', 'url'=>'electronic'],
            ['id'=>6, 'parent_id' => 1, 'category_name'=>'Beauty & Health', 'url'=>'beauty&health']
        ];
        Category::insert($categoryRecord);
    }
}

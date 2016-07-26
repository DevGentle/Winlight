<?php

use Illuminate\Database\Seeder;

class ProductSubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('product_sub_categories')->insert([
                'category_main_id' => random_int(1, 10),
                'title' => str_random(10),
                'image' => imagecreate(200, 200)
            ]);
        }
    }
}

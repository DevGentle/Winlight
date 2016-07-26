<?php

use Illuminate\Database\Seeder;

class ProductMainCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('product_main_categories')->insert([
                'title' => str_random(10),
                'image' => imagecreate(200, 200)
            ]);
        }
    }
}

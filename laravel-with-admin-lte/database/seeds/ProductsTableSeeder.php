<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('products')->insert([
                'category_main_id' => random_int(1, 10),
                'category_sub_id' => random_int(1, 10),
                'code' => count(['LED001']),
                'title' => str_random(10),
                'description' => str_random(100),
                'image' => imagecreate(200, 200)
            ]);
        }
    }
}

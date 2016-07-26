<?php

use Illuminate\Database\Seeder;

class ServiceCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('service_categories')->insert([
                'title' => str_random(10),
                'image' => imagecreate(200, 200)
            ]);
        }
    }
}

<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('services')->insert([
                'service_category_id' => random_int(1, 10),
                'title' => str_random(10),
                'content' => str_random(100),
                'image' => imagecreate(200, 200)
            ]);
        }
    }
}

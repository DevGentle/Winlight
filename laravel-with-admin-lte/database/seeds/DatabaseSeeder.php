<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContactsTableSeeder::class);
        $this->call(ProductMainCategoriesTableSeeder::class);
        $this->call(ProductSubCategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ServiceCategoriesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}

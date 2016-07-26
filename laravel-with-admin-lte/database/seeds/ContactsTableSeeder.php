<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 2; $i++) {
            DB::table('contacts')->insert([
                'title' => str_random(10),
                'address' => str_random(10),
                'email' => str_random(10) . '@gmail.com',
                'phone_number' => random_int(9, 9),
                'fax_number' => random_int(9, 9),
                'link' => str_random(10)
            ]);
        }
    }
}

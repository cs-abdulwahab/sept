<?php

use App\Customer;
use Faker\Factory;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Customer::truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 50; $i ++) {

        }
    }
}

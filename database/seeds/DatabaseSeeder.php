<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // factory(App\Customer::class, 30)->create();
        // ONE TO MANY relationship (with Users already created)

//
//        factory(\App\Employee::class, 2)->create();
//
//        factory(\App\Project::class, 2)->create();


        $projects =  \App\Project::all()->pluck('id');



    }
}

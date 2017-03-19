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

         $this->call(ImageTableSeeder::class);
         $this->call(UsersTableSeeder::class);
         $this->call(ProductTableSeeder::class);
    }
}

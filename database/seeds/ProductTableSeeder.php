<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
DB::table('products')->truncate();
$products = [
    [
        'product' => 'Kitten',
        'image_id' => 1,
        'description' => 'This is a kitten',
        'details' => 'This is where some detailes on kittens would go. Shout out kittens for being adorable.',
        'price' => 10,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'product' => 'Shark',
        'image_id' => 2,
        'description' => "This is a shark",
        'details' => "This is where some detailes on sharks would go. Damn nature, you scary.",
        'price' => 15,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],[
        'product' => 'Puppy',
        'image_id' => 3,
        'description' => "This is a  puppy",
        'details' => "This is where some detailes on puppies would go. Shout out puppies for being adorable.",
        'price' => 5,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],[
        'product' => 'Apple',
        'image_id' => 4,
        'description' => "This is an apple",
        'details' => "This is where some detailes on apples would go. Shout out apples for being delicious.",
        'price' => 1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],[
        'product' => 'Orange',
        'image_id' => 5,
        'description' => "This is an orange",
        'details' => "This is where some detailes on oranges would go. Shout out oranges for being delicious.",
        'price' => 1.1,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],[
        'product' => 'Peach',
        'image_id' => 6,
        'description' => "This is a peach",
        'details' => "This is where some detailes on peaches would go. Shout out peaches for being delicious.",
        'price' => 1.5,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],[
        'product' => 'Mango',
        'image_id' => 7,
        'description' => "This is a mango",
        'details' => "This is where some detailes on mangos would go. Shout out mangos for being delicious.",
        'price' => 2,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'product' => 'Cognac',
        'image_id' => 8,
        'description' => "This is a glass of cognac",
        'details' => "This is where some detailes on cognac would go. I'm like hey whats up, hello.",
        'price' => 17.38,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
    [
        'product' => 'Chain',
        'image_id' => 9,
        'description' => "This is a chain",
        'details' => "This is where some details on chains would go. 2Chainz but I got me a few on.",
        'price' => 2.21,
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now()
    ],
];

DB::table('products')->insert($products);
}
}

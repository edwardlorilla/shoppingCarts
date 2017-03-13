<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('images')->truncate();
        $images = [
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/kittens.jpg',
            ],
            [
                'file' => 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/shark.jpg',
            ],
            [
                'file' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/dog.jpg",
            ],
            [
                'file' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/apple.jpg",
            ],
            [
                'file' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/orange.jpg",
            ],
            [
                'file' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/peach.jpg",
            ],
            [
                'file' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/mango.png",
            ],
            [
                'file' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/cognac.jpg",
            ],
            [
                'file' => "https://s3-us-west-2.amazonaws.com/s.cdpn.io/241793/chain.jpg",
            ],

        ];
        DB::table('images')->insert($images);

    }
}

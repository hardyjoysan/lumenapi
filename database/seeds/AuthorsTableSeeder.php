<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('authors')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@testmail.com',
            'github' => 'https://github.com/'.str_random(6),
            'twitter' => 'https://twitter.com/'.str_random(8),
            'location' => str_random(8),
            'latest_article_published' => Carbon::now()->format('Y-m-d H:i:s'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}

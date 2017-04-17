<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
         'id' => 1,
         'title' => str_random(5),
         'text' => str_random(20),
     ]);
    }
}

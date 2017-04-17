<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $dt = Carbon::now();
      $dateNow = $dt->toDateTimeString();
       DB::table('comments')->insert([
           'id' => 6,
           'post_id' => 3,
           'text' => str_random(20),
           'created_at' => $dateNow,
           'updated_at' => $dateNow,
       ]);
    }
}

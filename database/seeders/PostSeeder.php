<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('posts')->insert([
             "title" => "title 1st",
             "content" => "1st content",
             "created_at"=> now(),
             "updated_at"=> now(),
          ] );

         DB::table('posts')->insert([
             "title" => "title 2nd",
             "content" => "2nd content",
             "created_at"=> now(),
             "updated_at"=> now(),
         ]);

         DB::table('posts')->insert([
             "title" => "title 3rd",
             "content" => "3rd content",
             "created_at"=> now(),
             "updated_at"=> now(),
         ]);

          DB::table('posts')->insert([
             "title" => "title 4th",
             "content" => "4th content",
             "created_at"=> now(),
             "updated_at"=> now(),
          ]);
            DB::table('posts')->insert([
             "title" => "title 5th",
             "content" => "5th content",
             "created_at"=> now(),
             "updated_at"=> now(),
            ]);


    }
}

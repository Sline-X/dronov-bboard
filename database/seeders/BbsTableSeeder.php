<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bbs')->insert([
            'title' => Str::random(10),
            'description' => Str::random(50),
            'price' => rand(50, 1000000),
            'user_id' => rand(1, 10)
        ]);

        //factory
        /**
         * factory(App\User::class, 50)->create()->each(function($u) {
            $u->posts()->save(factory(App\Post::class)->make());
            });
         */
    }
}

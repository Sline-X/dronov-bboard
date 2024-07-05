<?php

namespace Database\Seeders;

use App\Models\Bb;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BbsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bb::factory()
            ->count(100000)
            ->create();
    }
}

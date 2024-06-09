<?php

namespace Database\Seeders;

use App\Models\Tweet;
use Illuminate\Database\Seeder;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tweet::Factory()->count(10)->create();
    }
}

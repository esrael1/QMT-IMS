<?php

namespace Database\Seeders;

use App\Models\Stockin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Stockin::factory()->count(10)->create();
    }
}

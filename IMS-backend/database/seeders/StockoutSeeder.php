<?php

namespace Database\Seeders;

use App\Models\Stockout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StockoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Stockout::factory()->count(10)->create();
    }
}

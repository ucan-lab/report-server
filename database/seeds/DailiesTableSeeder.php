<?php

use Illuminate\Database\Seeder;
use App\Daily;

class DailiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Daily::truncate();
        factory(Daily::class, 50)->create();
    }
}

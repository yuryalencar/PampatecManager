<?php

use Illuminate\Database\Seeder;
use App\Models\Cost;

class CostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cost::class, 50)->create();
    }
}

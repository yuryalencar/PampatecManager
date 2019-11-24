<?php

use Illuminate\Database\Seeder;
use App\Models\Contract;

class ContractTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Contract::class, 50)->create();
    }
}

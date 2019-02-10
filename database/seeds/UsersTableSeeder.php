<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin User 1',
            'email'     => 'admin1@gmail.com',
            'password'  => bcrypt('102030')
        ]);
    }
}

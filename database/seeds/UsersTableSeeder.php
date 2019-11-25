<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name'      => 'admin',
            'email'     => 'admin@admin.com',
            'password'  => bcrypt('102030')
        ]);

        User::create([
            'name'      => 'Gerente',
            'email'     => 'gerente@gerente.com',
            'password'  => bcrypt('102030')
        ]);

        User::create([
            'name'      => 'Avaliador',
            'email'     => 'avaliador@avaliador.com',
            'password'  => bcrypt('102030')
        ]);

        User::create([
            'name'      => 'Empresario',
            'email'     => 'empresario@empresario.com',
            'password'  => bcrypt('102030')
        ]);

        User::create([
            'name'      => 'Secretário(a)',
            'email'     => 'secretary@secretary.com',
            'password'  => bcrypt('102030')
        ]);

//        factory(User::class, 50)->create();
    }
}

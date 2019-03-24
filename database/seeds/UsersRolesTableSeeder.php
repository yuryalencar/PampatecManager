<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $roles = Role::all();

        $users->firstWhere('email', '==', 'admin@admin.com')->roles()->attach(Role::getSuperUser());

        $users->firstWhere('email', '==', 'gerente@gerente.com')->roles()
            ->attach($roles->firstWhere('name', '==','manager')->id);

        $users->firstWhere('email', '==', 'avaliador@avaliador.com')->roles()
            ->attach($roles->firstWhere('name', '==','evaluator')->id);

        $users->firstWhere('email', '==', 'empresario@empresario.com')->roles()
            ->attach($roles->firstWhere('name', '==','entrepreneur')->id);

    }
}

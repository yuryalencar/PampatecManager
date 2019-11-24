<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Role;
use Route;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('authorization', function ($user, $role) {
            return $this->authorization($user, $role);
        });


        Gate::define('admin', function ($user, $role) {
            return $this->authorization($user, $role);
        });

        Gate::define('manager', function ($user) {
            return $this->authorization($user, 'manager');
        });

        Gate::define('evaluator', function ($user) {
            return $this->authorization($user, 'evaluator');
        });

        Gate::define('entrepreneur', function ($user) {
            return $this->authorization($user, 'entrepreneur');
        });

        Gate::define('secretary', function ($user) {
            return $this->authorization($user, 'secretary');
        });
    }

    private function authorization($user, $role)
    {
        $userProfiles = $user->roles;

        //user has no profile or role is null
        if (!isset($userProfiles) || !isset($role)) {
            return false;
        }

        //super user
        if (auth()->user() && in_array(Role::$superUser, $userProfiles->pluck('name')->toArray())) {
            return true;
        }


        //check role
        if (in_array($role, $userProfiles->pluck('name')->toArray())) {
            return true;
        }

        return false;
    }
}

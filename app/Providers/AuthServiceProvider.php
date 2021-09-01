<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
         'App\Models\Text' => 'App\Policies\TextPolicy',
         'App\Models\Photo' => 'App\Policies\PhotoPolicy',
         'App\Models\Table' => 'App\Policies\TablePolicy',
         'App\Models\Combo' => 'App\Policies\ComboPolicy',
         'App\Models\Program' => 'App\Policies\ProgramPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}

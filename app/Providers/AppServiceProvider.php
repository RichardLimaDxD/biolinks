<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\Rules\Password;
use Illuminate\Database\Eloquent\Model;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        Model::unguard(true);
    }

    public function boot(): void
    {
        Password::defaults(function () {
            $rule = Password::min(6);
                
            return $this->app->isProduction()
                ? $rule
                ->min(6) 
                ->letters() 
                ->mixedCase()
                ->numbers()
                ->symbols()
                ->uncompromised()
                : $rule;
        });   
    }
}

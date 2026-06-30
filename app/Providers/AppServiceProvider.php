<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Gate; // <-- Add this
use App\Models\User;                 // <-- Add this
=======
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
<<<<<<< HEAD
        // Define the Gate from your slide
        Gate::define('manage-students', function (User $user) {
            return $user->isAdmin(); 
        });
    }
}
=======
        //
    }
}
>>>>>>> b80778736e79fc83cfd17e3582d4491083aa35b4

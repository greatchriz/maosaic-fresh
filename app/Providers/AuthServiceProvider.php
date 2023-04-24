<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Notifications\VerifyEmail;
// import this email class UserEmailVerification
use App\Mail\UserEmailVerification;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

         /* define a admin user role */
        Gate::define('isAdmin', function($user) {
            return $user->admin == true;
         });

         VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new UserEmailVerification($url))->to($notifiable->email);
        });
    }
}

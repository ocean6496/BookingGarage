<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Notification;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        
        // view()->composer('admin', function ($view) 
        // {
           // $user = Auth::user();  dd($user);
           //  $notifications = Notification::where('user_id', $user->id)->get();
           //  $count_notifications = Notification::where('user_id', $user->id)->count();
           //  view()->share(['notifications' => $notifications, 'count_notifications' => $count_notifications]);
        // });
    }
}

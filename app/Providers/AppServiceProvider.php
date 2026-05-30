<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Visitor;

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
        // Visitor tracking
        if (!app()->runningInConsole()) {  // Only track when web request, not in artisan commands
            $ip = request()->ip();
            $userAgent = request()->userAgent();

            $exists = Visitor::where('ip_address', $ip)
                ->whereDate('created_at', today())
                ->exists();

            if (! $exists) {
                Visitor::create([
                    'ip_address' => $ip,
                    'user_agent' => $userAgent,
                ]);
            }
        }
    }
}

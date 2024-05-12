<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use TallStackUi\Facades\TallStackUi;

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
        TallStackUi::personalize()
            ->form('label')
            ->block('text', 'text-dracula-light-50');

        TallStackUi::personalize()
            ->form('input')
            ->block('input.wrapper', 'focus:ring-dracula-purple-600 focus-within:focus:ring-dracula-purple-600 focus-within:ring-dracula-purple-600 dark:focus-within:ring-dracula-purple-600 flex rounded-md ring-1 transition focus-within:ring-2 transition-all ease-in-out')
            ->block('input.base', 'w-full rounded-lg border-0 bg-none ring-0 bg-transparent focus:outline-none focus:ring-transparent');

        TallStackUi::personalize()
            ->form('textarea')
            ->block('input.wrapper', 'focus:ring-dracula-purple-600 focus-within:focus:ring-dracula-purple-600 focus-within:ring-dracula-purple-600 dark:focus-within:ring-dracula-purple-600 flex rounded-md ring-1 transition focus-within:ring-2 transition-all ease-in-out')
            ->block('input.base', 'w-full rounded-lg border-0 bg-none ring-0 bg-transparent focus:outline-none focus:ring-transparent');
    }
}

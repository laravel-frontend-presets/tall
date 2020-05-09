<?php

namespace LaravelFrontendPresets\Tall;

use Laravel\Ui\UiCommand;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class TallServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        UiCommand::macro('tall', function ($command) {
            TallPreset::install();

            $command->info('TALL preset scaffolding installed successfully.');

            if ($command->option('auth')) {
                TallPreset::installAuth();

                $command->info('Auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your new assets.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}

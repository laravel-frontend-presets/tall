<?php

namespace LaravelFrontendPresets\Tall;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Laravel\Ui\UiCommand;

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

                $command->info('TALL auth scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your fresh scaffolding.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}

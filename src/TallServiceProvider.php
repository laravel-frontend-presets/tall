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
        UiCommand::macro('tall', function (UiCommand $command) {
            $options = $command->option('option') ?? [];
            $option = reset($options);

            DefaultPreset::install();

            $command->info('Basic TALL preset scaffolding installed successfully.');

            if ($command->option('auth')) {
                AuthPreset::install();

                $command->info('Auth scaffolding installed successfully.');
            }

            if ($option === 'extra') {
                if (!$command->option('auth')) {
                    return $command->error('The `extra` option requires the `--auth` flag to work.');
                }

                ExtraPreset::install();

                $command->info('Extra scaffolding installed successfully.');
            }

            $command->comment('Please run "npm install && npm run dev" to compile your new assets.');
        });

        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}

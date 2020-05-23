<?php

namespace LaravelFrontendPresets\Tall;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class ExtraPreset extends Preset
{
    use PresetUtilities;

    public static function install()
    {
        $filesystem = new Filesystem();

        $filesystem->copyDirectory(__DIR__ . '/../stubs/extra', base_path());

        file_put_contents(base_path('routes/web.php'), PHP_EOL . <<<STUB
        Route::layout('layouts.app')->middleware('auth')->group(function () {
            Route::livewire('dashboard', 'app.dashboard')
                ->name('dashboard');

            Route::livewire('settings', 'app.users.settings')
                ->name('users.settings');
        });
        STUB . PHP_EOL, FILE_APPEND);
    }
}

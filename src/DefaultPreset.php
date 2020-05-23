<?php

namespace LaravelFrontendPresets\Tall;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class DefaultPreset extends Preset
{
    use PresetUtilities;

    const NPM_PACKAGES_TO_ADD = [
        '@tailwindcss/ui' => '^0.1',
        'alpinejs' => '^2.0',
        'laravel-mix-tailwind' => '^0.1.0',
        'tailwindcss' => '^1.4',
    ];

    const NPM_PACKAGES_TO_REMOVE = [
        'lodash',
        'axios',
    ];

    public static function install()
    {
        static::updatePackages();

        $filesystem = new Filesystem();
        $filesystem->deleteDirectory(resource_path('sass'));
        $filesystem->copyDirectory(__DIR__ . '/../stubs/default', base_path());

        static::updateFile(base_path('app/Providers/RouteServiceProvider.php'), function ($file) {
            return str_replace("public const HOME = '/home';", "public const HOME = '/';", $file);
        });

        static::updateFile(base_path('app/Http/Middleware/RedirectIfAuthenticated.php'), function ($file) {
            return str_replace("RouteServiceProvider::HOME", "route('home')", $file);
        });
    }
}

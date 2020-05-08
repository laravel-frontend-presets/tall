<?php

namespace LaravelFrontendPresets\Tall;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Laravel\Ui\Presets\Preset;

class TallPreset extends Preset
{
    const NPM_PACKAGES_TO_ADD = [
        '@tailwindcss/custom-forms' => '^0.2',
        '@tailwindcss/ui' => '^0.1',
        'alpinejs' => '^2.0',
        'laravel-mix-tailwind' => '^0.1.0',
        'tailwindcss' => '^1.4',
    ];

    const NPM_PACKAGES_TO_REMOVE = [
        'lodash',
        'axios',
        'sass',
        'sass-loader',
    ];

    public static function install()
    {
        static::updatePackages();

        $filesystem = new Filesystem();

        $filesystem->deleteDirectory(resource_path('sass'));

        $filesystem->copyDirectory(__DIR__ . '/../stubs/default', base_path());

        static::updateDefaultHomeRoute();
    }

    public static function installAuth()
    {
        $filesystem = new Filesystem();

        $filesystem->copyDirectory(__DIR__ . '/../stubs/auth', base_path());
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::NPM_PACKAGES_TO_ADD,
            Arr::except($packages, static::NPM_PACKAGES_TO_REMOVE)
        );
    }

    protected static function updateDefaultHomeRoute()
    {
        $originalProvider = file_get_contents(app_path('Providers/RouteServiceProvider.php'));
        $newProvider = str_replace("public const HOME = '/home';", "public const HOME = '/';", $originalProvider);
        file_put_contents(app_path('Providers/RouteServiceProvider.php'), $newProvider);
    }
}

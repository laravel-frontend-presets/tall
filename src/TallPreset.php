<?php

namespace LaravelFrontendPresets\Tall;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Laravel\Ui\Presets\Preset;

class TallPreset extends Preset
{
    const NPM_PACKAGES_TO_ADD = [
        'scss' => [
            '@tailwindcss/ui' => '^0.1',
            'alpinejs' => '^2.0',
            'laravel-mix-tailwind' => '^0.1.0',
            'tailwindcss' => '^1.4',
        ],
        'postcss' => [
            '@tailwindcss/ui' => '^0.1',
            'alpinejs' => '^2.0',
            'tailwindcss' => '^1.4',
        ]
    ];

    const NPM_PACKAGES_TO_REMOVE = [
        'lodash',
        'axios',
    ];

    const PREPROCESSORS = [
        'scss',
        'postcss'
    ];

    protected static $preprocessor = 'scss';

    public static function setPreprocessor(string $preprocessor)
    {
        if (! in_array($preprocessor, static::PREPROCESSORS)) {
            return;
        }

        static::$preprocessor = $preprocessor;
    }

    public static function getStubsPath(string $append = '')
    {
        $path = dirname(__FILE__, 2).'/stubs';

        return $path.'/'.ltrim($append, '/');
    }

    public static function install(string $preprocessor = 'scss')
    {
        static::setPreprocessor($preprocessor);
        static::updatePackages();

        $filesystem = new Filesystem();
        $filesystem->deleteDirectory(resource_path('sass'));
        $filesystem->copyDirectory(static::getStubsPath('default'), base_path());
        $filesystem->copyDirectory(static::getStubsPath(static::$preprocessor), base_path());

        static::updateFile(base_path('app/Providers/RouteServiceProvider.php'), function ($file) {
            return str_replace("public const HOME = '/home';", "public const HOME = '/';", $file);
        });

        static::updateFile(base_path('app/Http/Middleware/RedirectIfAuthenticated.php'), function ($file) {
            return str_replace("RouteServiceProvider::HOME", "route('home')", $file);
        });
    }

    public static function installAuth()
    {
        $filesystem = new Filesystem();

        $filesystem->copyDirectory(static::getStubsPath('auth'), base_path());
    }

    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::NPM_PACKAGES_TO_ADD[static::$preprocessor],
            Arr::except($packages, static::NPM_PACKAGES_TO_REMOVE)
        );
    }

    /**
     * Update the contents of a file with the logic of a given callback.
     */
    protected static function updateFile(string $path, callable $callback)
    {
        $originalFileContents = file_get_contents($path);
        $newFileContents = $callback($originalFileContents);
        file_put_contents($path, $newFileContents);
    }
}

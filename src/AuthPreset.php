<?php

namespace LaravelFrontendPresets\Tall;

use Illuminate\Filesystem\Filesystem;
use Laravel\Ui\Presets\Preset;

class AuthPreset extends Preset
{
    use PresetUtilities;

    public static function install()
    {
        $filesystem = new Filesystem();

        $filesystem->copyDirectory(__DIR__ . '/../stubs/auth', base_path());
    }
}

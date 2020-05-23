<?php

namespace LaravelFrontendPresets\Tall;

use Illuminate\Support\Arr;

trait PresetUtilities
{
    protected static function updatePackageArray(array $packages)
    {
        return array_merge(
            static::NPM_PACKAGES_TO_ADD ?? [],
            Arr::except($packages, static::NPM_PACKAGES_TO_REMOVE ?? [])
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

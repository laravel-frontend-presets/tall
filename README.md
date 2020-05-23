# Laravel TALL Preset

[![CI Status](https://github.com/laravel-frontend-presets/tall/workflows/Run%20Tests/badge.svg)](https://github.com/laravel-frontend-presets/tall/actions)
[![Total Downloads](https://poser.pugx.org/laravel-frontend-presets/tall/d/total.svg)](https://packagist.org/packages/laravel-frontend-presets/tall)

A front-end preset for Laravel to scaffold an application using the [TALL stack](https://tallstack.dev), jumpstarting your application's development.

If you're not familiar with the name, it's an acronym that describes the main technologies involved in the stack:
- [Tailwind CSS](https://tailwindcss.com)
- [Alpine.js](https://github.com/alpinejs/alpine)
- [Laravel](https://laravel.com)
- [Livewire](https://laravel-livewire.com)

![Login View](./screenshot.png)

Some notable features of this package include:
- Views extending a default layout
- Front-end assets like Tailwind CSS and Alpine.js compiled with Laravel Mix
- Tailwind-powered pagination views
- The [Tailwind UI](https://tailwindui.com) and Tailwind's [Custom Forms](https://github.com/tailwindcss/custom-forms) extensions available out-of-the-box

## Installation (without auth)

To install the preset install a fresh Laravel application run with the following command in your project root:
```bash
composer create-project --prefer-dist laravel/laravel .
```

or with this command if you've installed the Laravel Installer:
```bash
laravel new .
```

Then simply run the following commands:
```bash
composer require livewire/livewire laravel-frontend-presets/tall
php artisan ui tall
npm install
npm run dev
```

## Installation (with auth)

If you would like to install the preset and its auth scaffolding in a fresh Laravel application, make sure to use the `--auth` flag on the `ui` command:

```bash
composer require livewire/livewire laravel-frontend-presets/tall
php artisan ui tall --auth
npm install
npm run dev
```

Some notable features of the authentication scaffolding include:
- Powered by Livewire components and single action controllers
- Bundled with pre-written tests

All routes, components, controllers and tests are published to your application. The idea behind this is that you have full control over every aspect of the scaffolding in your own app, removing the need to dig around in the vendor folder to figure out how things are working.

## CSS purging

Tailwind uses PurgeCSS to remove any unused classes from your production CSS builds. You can modify or remove this behaviour in the `purge` section of your `tailwind.config.js` file. For more information, please see the [Tailwind documentation](https://tailwindcss.com/docs/controlling-file-size/).

## Removing the package

If you don't want to keep this package installed once you've installed the preset, you can safely remove it. Unlike the default Laravel presets, this one publishes all the auth logic to your project's `/app` directory, so it's fully redundant.


### A note on pagination

If you are using pagination, you set the default pagination views to the ones provided in the `boot` method of a service provider:

```php
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Paginator::defaultView('pagination::default');

        Paginator::defaultSimpleView('pagination::simple-default');
    }
}
```

## Credits

- [Dan Harrin](https://github.com/DanHarrin)
- [Liam Hammett](https://github.com/imliam)
- [Ryan Chandler](https://github.com/ryangjchandler)
- [Tailwind UI](https://tailwindui.com) for the default authentication and pagination views
- [All Contributors](../../contributors)

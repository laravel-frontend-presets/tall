# Laravel TALL Preset

[![CI Status](https://github.com/laravel-frontend-presets/tall/workflows/CI/badge.svg)](https://github.com/laravel-frontend-presets/tall/actions)
[![Total Downloads](https://packagist.org/packages/laravel-frontend-presets/tall)](https://poser.pugx.org/laravel-frontend-presets/tall/d/total.svg)

A front-end preset for Laravel to scaffold an application using the TALL stack, jumpstarting your application's development.

If you're not familiar with the name, it's an acronym that describes the main technologies involved in the stack:
- [TailwindCSS](https://tailwindcss.com)
- [Alpine.js](https://github.com/alpinejs/alpine)
- [Laravel](https://laravel.com)
- [Livewire](https://laravel-livewire.com)

Some notable features of this package include:
- Views extending a default layout
- Front-end assets like TailwindCSS and AlpineJS compiled with Laravel Mix
- Tailwind-powered pagination views
- The [Tailwind UI](https://tailwindui.com) and Tailwind's [Custom Forms](https://github.com/tailwindcss/custom-forms) extensions available out-of-the-box

## Installation (without auth)

To install the preset in a fresh Laravel application, simply run the following commands:

```bash
composer require laravel/ui livewire/livewire laravel-frontend-presets/tall
php artisan ui tall
npm install
npm run dev
```

## Installation (with auth)

If you would like to install the preset and its auth scaffolding in a fresh Laravel application, make sure to use the `--auth` flag on the `ui` command:

```bash
composer require laravel/ui laravel-frontend-presets/tall
php artisan ui tall --auth
npm install
npm run dev
```

Some notable features of the authentication scaffolding include:
- Powered by Livewire components and single action controllers
- Bundled with pre-written tests

All routes, components, controllers and tests are published to your application. The idea behind this is that you have full control over every aspect of the scaffolding in your own app, removing the need to dig around in the vendor folder to figure out how things are working.

![Login View](./screenshot.png)

## Removing the package

If you don't want to keep this package installed once you've installed the preset, you can safely remove it with a couple of extra steps. Unlike the default Laravel presets, this one publishes all the auth logic to your project's `/app` directory, so it's fully redundant.

If you are using pagination, set the default pagination views to the ones provided in the `boot` method of a service provider:

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

That's it, you should now be able to remove the package:

```bash
composer remove laravel-frontend-presets/tall
```

## Credits

- [Dan Harrin](https://github.com/DanHarrin)
- [Liam Hammett](https://github.com/imliam)
- [Ryan Chandler](https://github.com/ryangjchandler)
- [Tailwind UI](https://tailwindui.com) for the default authentication and pagination views
- [All Contributors](../../contributors)

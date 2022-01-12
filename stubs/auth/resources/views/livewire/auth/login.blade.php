@section('title', 'Sign in to your account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2>
            Sign in to your account
        </h2>
        @if (Route::has('register'))
            <p class="mt-2 text-center leading-5 max-w">
                Or
                <a href="{{ route('register') }}">
                    create a new account
                </a>
            </p>
        @endif
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <x-input.label for="email">
                        Email address
                    </x-input.label>

                    <x-input wire:model.lazy="email" id="email" name="email" type="email" required autofocus :error="$errors->first('email')" />
                </div>

                <div class="mt-6">
                    <x-input.label for="password">
                        Password
                    </x-input.label>

                    <x-input wire:model.lazy="password" id="password" name="password" type="password" required :error="$errors->first('password')" />
                </div>

                <div class="flex items-center justify-between mt-6">
                    <div class="flex items-center">
                        <x-input.checkbox wire:model.lazy="remember" id="remember" type="checkbox" />
                        <x-input.label for="remember" class="ml-2">
                            Remember me
                        </x-input.label>
                    </div>

                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <x-button class="w-full">
                            Sign in
                        </x-button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

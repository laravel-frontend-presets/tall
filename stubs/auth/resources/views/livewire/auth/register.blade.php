@section('title', 'Create a new account')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2>
            Create a new account
        </h2>

        <p class="mt-2 text-center leading-5 max-w">
            Or
            <a href="{{ route('login') }}">
                sign in to your account
            </a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="register">
                <div>
                    <x-input.label for="name">
                        Name
                    </x-input.label>

                    <x-input wire:model.lazy="name" id="name" name="name" required autofocus :error="$errors->first('name')" />
                </div>

                <div class="mt-6">

                    <x-input.label for="email">
                        Email address
                    </x-input.label>

                    <x-input wire:model.lazy="email" id="email" name="email" type="email" required :error="$errors->first('email')" />
                </div>

                <div class="mt-6">
                    <x-input.label for="password">
                        Password
                    </x-input.label>

                    <x-input wire:model.lazy="password" id="password" name="password" type="password" required :error="$errors->first('password')" />
                </div>

                <div class="mt-6">

                    <x-input.label for="password_confirmation">
                        Confirm Password
                    </x-input.label>

                    <x-input wire:model.lazy="passwordConfirmation" id="password_confirmation" name="password_confirmation" type="password" required :error="false" />
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <x-button class="w-full">
                            Register
                        </x-button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

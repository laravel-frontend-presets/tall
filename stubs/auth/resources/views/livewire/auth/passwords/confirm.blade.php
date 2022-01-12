@section('title', 'Confirm your password')

<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2>
            Confirm your password
        </h2>
        <p class="mt-2 text-center leading-5 max-w">
            Please confirm your password before continuing
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="confirm">
                <div>
                    <x-input.label for="password">
                        Password
                    </x-input.label>

                    <x-input wire:model.lazy="password" id="password" name="password" type="password" required autofocus :error="$errors->first('password')" />
                </div>

                <div class="flex items-center justify-end mt-6">
                    <div class="text-sm leading-5">
                        <a href="{{ route('password.request') }}">
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <x-button class="w-full">
                            Confirm password
                        </x-button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>

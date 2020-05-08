<div>
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <a href="{{ route('home') }}">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600" />
        </a>

        <h2 class="mt-6 text-3xl font-extrabold leading-9 text-center text-gray-900">
            {{ __('auth.verify.heading') }}
        </h2>

        <p class="mt-2 text-sm leading-5 text-center text-gray-600 max-w">
            {{ __('auth.verify.subtitle.pre') }}
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline">
                {{ __('auth.verify.subtitle.link') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            @if (session('resent'))
                <div class="flex items-center px-4 py-3 mb-6 text-sm text-white bg-green-500 rounded shadow" role="alert">
                    <svg class="w-4 h-4 mr-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>

                    <p>{{ __('auth.verify.resent_verification_link') }}</p>
                </div>
            @endif

            <div class="text-sm text-gray-700">
                <p>{{ __('auth.verify.check_email_for_link') }}</p>

                <p class="mt-3">
                    {{ __('auth.verify.email_not_received.pre') }} <a wire:click="resend" class="text-indigo-700 transition duration-150 ease-in-out cursor-pointer hover:text-indigo-600 focus:outline-none focus:underline">{{ __('auth.verify.email_not_received.link') }}</a>
                </p>
            </div>
        </div>
    </div>
</div>

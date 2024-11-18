<x-guest-layout>
    <style>
        .flag-container {
            display: inline-block;
            margin: 3px;
            /* adjust as needed */
        }

        .flag-left {
            float: left;
        }

        .flag-right {
            float: right;
        }
    </style>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Bandeiras -->
    <div class="flag-container">
        <div class="flag-left">
            <form method="get" action="{{ route('change.language', ['locale' => 'en']) }}">
                <button type="submit">
                    <img src="/images/bandeiraa.png" alt="English" class="w-6 h-6">
                </button>
            </form>
        </div>
    </div>
    <div class="flag-container">
        <div class="flag-right">
            <form method="get" action="{{ route('change.language', ['locale' => 'pt']) }}">
                <button type="submit">
                    <img src="/images/bandeira.jpg" alt="Português" class="w-6 h-6">
                </button>
            </form>
        </div>
    </div>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('auth.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('auth.password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('auth.remember_me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('auth.forgot_password') }}
                </a>
            @endif

            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('register') }}">
                {{ __('auth.dont_have_account') }}
            </a>

            <x-primary-button class="ml-3">
                {{ __('auth.log_in') }}
            </x-primary-button>
        </div>
    </form>
    </div>
</x-guest-layout>

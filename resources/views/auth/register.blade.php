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
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('auth.name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('auth.email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('auth.password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('auth.confirm_password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('auth.already_registered') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('auth.register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

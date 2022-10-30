<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="text-center">
            <h2 class="text-2xl font-extrabold">Welcome back</h2>
            <p class="pb-2 text-sm">Continue with the email address you use to sign in</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-text-input id="email" placeholder="Email Address" class="auth_input" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" placeholder="Password" class="auth_input"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-between mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>

                @if (Route::has('password.request'))
                    <a class="text-sm font-semibold link_color hover:text-blue-900" href="{{ route('password.request') }}">
                        {{ __('Forgotten Password') }}
                    </a>
                @endif
            </div>

            <div class="mt-4">
                <x-primary-button class="w-full block text-center auth_btn hover:bg-orange-600">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

        <div class="mt-2 text-center">
            <span class="text-sm">Don't have an account? <a href="{{ route('register') }}" class="primary_color">Sign up for free</a></span>
        </div>
    </x-auth-card>
</x-guest-layout>

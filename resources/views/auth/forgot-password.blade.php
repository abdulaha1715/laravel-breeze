<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="text-center">
            <h2 class="text-2xl font-extrabold">Forgot Password</h2>
            <p class="pb-2 text-sm">Enter your email reset your password.</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-text-input id="email" placeholder="Email Address" class="auth_input" type="email" name="email" :value="old('email')" required autofocus />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="w-full block text-center auth_btn hover:bg-orange-600">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>

            <div class="mt-2 text-center">
                <span class="text-sm center">Don't have an account? <a href="{{ route('register') }}" class="primary_color font-semibold">Sign up for free</a></span>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

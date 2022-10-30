<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="text-center">
            <h2 class="text-2xl font-extrabold">Create an account</h2>
            <p class="pb-2 text-sm">Continue with the email address you use to sign up</p>
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-text-input id="name" class="auth_input" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus />

                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-text-input id="email" class="auth_input" placeholder="Email" type="email" name="email" :value="old('email')" required />

                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-text-input id="password" class="auth_input"
                                type="password"
                                name="password"
                                placeholder="Password"
                                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-text-input id="password_confirmation" class="auth_input"
                                type="password"
                                placeholder="Confirm Password"
                                name="password_confirmation" required />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="w-full block text-center auth_btn hover:bg-orange-600">
                    {{ __('Register') }}
                </x-primary-button>
            </div>

            <div class="mt-2 text-center">
                <span class="text-sm">Already have an account? <a href="{{ route('login') }}" class="primary_color font-semibold">Sign in here</a></span>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>

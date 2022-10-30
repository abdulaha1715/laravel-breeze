<div class="flex">
    <div class="min-h-screen w-1/3 px-8">
        <div class="w-60 m-auto mt-24">
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    @php
        if ( Request::is('login') ) {
            $image_url = asset('backend/images/login-bg.jpg');
        } elseif ( Request::is('register') ) {
            $image_url = asset('backend/images/register-bg.jpg');
        } elseif ( Request::is('forgot-password') ) {
            $image_url = asset('backend/images/password-bg.jpg');
        } else {
            $image_url = '';
        }
    @endphp

    <div class="relative w-2/3 bg-black min-h-screen bg-no-repeat bg-cover h-full z-10" style="background-image: url('{{ $image_url }}')">
        <div class="absolute top-0 right-0 bottom-0 left-0 bg-black opacity-50"></div>
        <p class="text-white absolute bottom-20 left-16 z-20">First Work advocacy week kicks off on <br> Monday! Get your tickets to Amplify 2022.</p>
    </div>
</div>

<div class="flex">
    <div class="min-h-screen w-1/3 ">
        <div>
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
        } else {
            $image_url = '';
        }
    @endphp

    <div class="w-2/3 bg-black min-h-screen " style="background-image: url('{{ $image_url }}')">
        <p class="text-white">First Work advocacy week kicks off on <br> Monday! Get your tickets to Amplify 2022.</p>
    </div>
</div>

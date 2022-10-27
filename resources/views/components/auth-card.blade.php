<div class="flex">
    <div class="min-h-screen w-1/3 ">
        <div>
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
    <div class="w w-2/3 bg-black min-h-screen">

    </div>
</div>

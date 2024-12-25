<nav class="sticky top-0 z-40 bg-white md:relative">
    <div class="py-2 flex justify-between px-4 items-center border-b border-gray-300 lg:px-24">
        <a href="{{ route('home') }}">
            <img src={{ $logo }} alt="{{ $appname }} Logo"
                class="max-w-64 px-2 py-2 overflow-visible md:max-w-80">
        </a>

        <button type="button"
            class="block border-none outline-none focus:ring-4 ring-hot-700/25 p-2 rounded-full md:hidden"
            @click="nav=!nav">
            <svg class="w-9 h-9 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="1.75" d="M5 7h14M5 12h14M5 17h14" />
            </svg>
        </button>
    </div>
</nav>
<div
    class="sticky hidden z-40 top-0 bg-white justify-between px-4 lg:px-24 items-center shadow-md shadow-gray-500 md:flex">
    <ul class="flex items-center gap-3 text-gray-600 py-1.5">
        <li><a href="{{ route('home') }}"
                class="{{ Route::currentRouteName() === 'home' ? 'bg-hot-700 text-white' : '' }} py-2 px-4 rounded-md">Home</a>
        </li>
        <li><a href="{{ route('hot-tubs') }}"
                class="{{ Route::currentRouteName() === 'hot-tubs' ? 'bg-hot-700 text-white' : '' }} py-2 px-4 rounded-md">Hot
                Tubs</a></li>
        <li><a href="{{ route('about-us') }}"
                class="{{ Route::currentRouteName() === 'about-us' ? 'bg-hot-700 text-white' : '' }} py-2 px-4 rounded-md">About
                Us</a></li>
        <li><a href="{{ route('contact-us') }}"
                class="{{ Route::currentRouteName() === 'contact-us' ? 'bg-hot-700 text-white' : '' }} py-2 px-4 rounded-md">Contact
                Us</a></li>
    </ul>
    <a href="tel:{{ $telephone }}" class="flex text-lg items-center gap-2 light-btn">
        <x-feathericon-phone-call />
        <span>{{ $telephone }}</span>
    </a>
</div>

<div x-show="nav" class="fixed inset-0 z-50 bg-white animate-slideright h-screen flex flex-col" style="display:none;">
    <div class="flex justify-end py-4 px-4">
        <button type="button" class="block border-none outline-none focus:ring-4 ring-hot-700/25 p-1 rounded-lg"
            @click="nav=false">
            <svg class="w-9 h-9 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75"
                    d="M6 18 17.94 6M18 18 6.06 6" />
            </svg>
        </button>
    </div>
    <div class="grow h-full flex flex-col justify-between pb-8 ">
        <ul class="flex flex-col items-stretch gap-6 text-gray-600 px-3 font-medium">
            <li><a href="{{ route('home') }}"
                    class="{{ Route::currentRouteName() === 'home' ? 'bg-hot-700 text-white block' : '' }} py-2 px-4 rounded-md">Home</a>
            </li>
            <li><a href="{{ route('hot-tubs') }}"
                    class="{{ Route::currentRouteName() === 'hot-tubs' ? 'bg-hot-700 text-white block' : '' }} py-2 px-4 rounded-md">Hot
                    Tubs</a></li>
            <li><a href="{{ route('about-us') }}"
                    class="{{ Route::currentRouteName() === 'about-us' ? 'bg-hot-700 text-white block' : '' }} py-2 px-4 rounded-md">About
                    Us</a></li>
            <li><a href="{{ route('contact-us') }}"
                    class="{{ Route::currentRouteName() === 'contact-us' ? 'bg-hot-700 text-white block' : '' }} py-2 px-4 rounded-md">Contact
                    Us</a></li>
        </ul>
        {{-- Telephone --}}
        <div class="px-4">
            <a href="tel:{{ $telephone }}" class="flex text-lg items-center gap-2 light-btn">
                <x-feathericon-phone-call />
                <span>{{ $telephone }}</span>
            </a>
        </div>
    </div>
</div>

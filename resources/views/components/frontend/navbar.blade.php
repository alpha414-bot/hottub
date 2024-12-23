<nav class="relative bg-white z-20">
    <div class="py-3 flex justify-between px-24 items-center border-b border-gray-300">
        <a href="{{ route('home') }}">
            <img src={{ $logo }} alt="{{ $name }} Logo" class="max-w-80 px-2 py-2 overflow-visible">
        </a>
        <div class="relative flex gap-x-2 items-stretch px-4 bg-gray-300 rounded-3xl">
            <input type="search" placeholder="Search..." class="py-3.5 bg-transparent placeholder:text-gray-600 border-none outline-none ring-0 focus:ring-0">
            <div>
                <button type="submit" class="block h-full">
                    <x-feathericon-search class="text-gray-700 w-5 h-5" />
                </button>
            </div>
        </div>
    </div>
</nav>
<div class="sticky top-0 bg-white z-20 flex justify-between px-24 items-center shadow-md shadow-gray-500">
    <ul class="flex items-center gap-3 text-gray-600 py-1.5">
        <li><a href="{{ route('home') }}"
                class="{{ Route::currentRouteName() === 'home' ? 'bg-hot-700 text-white' : '' }} py-2 px-4 rounded-md">Home</a>
        </li>
        <li><a href="{{ route('hot-tubs') }}"
                class="{{ Route::currentRouteName() === 'hot-tubs' ? 'bg-hot-700 text-white' : '' }} py-2 px-4 rounded-md">Hot
                Tubs</a></li>
        <li><a href="{{ route('contact-us') }}"
                class="{{ Route::currentRouteName() === 'contact-us' ? 'bg-hot-700 text-white' : '' }} py-2 px-4 rounded-md">Contact
                Us</a></li>
    </ul>
    <a href="" class="flex text-lg items-center gap-2 light-btn">
        <x-feathericon-phone-call />
        <span>(334) 333-3211</span>
    </a>
</div>

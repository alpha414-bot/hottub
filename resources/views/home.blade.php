<x-layout>
    <x-slot:meta>
        <meta name="description"
            content="Discover luxury hot tubs at family-friendly prices. Enjoy free delivery, extended warranty plans, and financing options. Serving Alabama, Georgia, and North Florida.">
        <meta name="keywords"
            content="hot tubs, luxury hot tubs, family-friendly prices, free delivery, extended warranty, financing options, hydrotherapy, Alabama, Georgia, North Florida">
        <meta property="og:title" content="Luxury Hot Tubs at Family-Friendly Prices">
        <meta property="og:description"
            content="Discover luxury hot tubs at family-friendly prices. Enjoy free delivery, extended warranty plans, and financing options. Serving Alabama, Georgia, and North Florida.">
        <meta property="og:image" content="{{ asset('/img/hero.webp') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Luxury Hot Tubs at Family-Friendly Prices">
        <meta name="twitter:description"
            content="Discover luxury hot tubs at family-friendly prices. Enjoy free delivery, extended warranty plans, and financing options. Serving Alabama, Georgia, and North Florida.">
        <meta name="twitter:image" content="{{ asset('/img/hero.webp') }}">
    </x-slot>
    <x-slot:headcss>
        {{-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" /> --}}
    </x-slot>
    <x-slot:headjs>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.product-slick').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    autoplay: true,
                    autoplaySpeed: 6000,
                    prevArrow: $("#prevArrow[data-slick='product-slick']"),
                    nextArrow: $("#nextArrow[data-slick='product-slick']")
                });
            });
        </script>
    </x-slot>
    <x-slot:title>
        Hot Tub
    </x-slot>
    {{-- Quick Intro --}}
    <x-frontend.intro />
    {{-- Product Learn More --}}
    <section class="mt-6 grid grid-cols-5 items-center justify-between gap-x-6 py-12 px-32">
        @foreach ($products_intro as $product)
            <a href="{{ route('learn-more', ['slug' => $product->slug]) }}" class="flex flex-col items-center">
                <img src="{{ asset('/img/products/' . $product->slug . '/' . $product->images[0]) }}"
                    alt="The {{ Str::ucfirst($product->slug) }} thumbnail">
                <div class="mt-4 flex flex-col items-center">
                    <p class="text-3xl text-center font-normal">The {{ Str::ucfirst($product->slug) }}</p>
                    <p class="text-base text-center font-normal">{{ $product->measurement }}
                        {{ Str::replace(' + 1 Lounger', '', $product->specifications['features']['Seating Configuration']) }}
                    </p>
                    <div class="cursor-pointer inline-block mx-auto learn-more-btn mt-2">Learn More</div>
                </div>
            </a>
        @endforeach
    </section>
    {{-- Mid Section Hero --}}
    <section
        class="relative flex items-center justify-end px-5 bg-cover bg-center bg-no-repeat h-[90vh] w-full bg-hot-700"
        style="background-image: url({{ asset('/img/hero.webp') }});">
        <div class="bg-hot-700/70 backdrop-blur-sm w-[36rem] py-10 text-white rounded-xl px-7">
            <h3 class="text-6xl font-bold leading-[4.2rem]">LUXURY HOT TUBS, FAMILY-FRIENDLY PRICES</h3>
            <p class="text-lg text-center">
            <p class="text-2xl font-normal text-center">Perfect for family time or personal</p>
            <p class="text-2xl font-medium text-center">hydrotherapy, our hot tubs bring luxury to your</p>
            <p class="flex items-center justify-center">
                <span class="text-2xl ">backyard with the</span>
                <span class="ms-2 relative whitespace-nowrap isolate text-3xl overflow-visible">
                    <span class="">best local deals.</span>
                    <svg height="16" viewBox="0 0 229 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="absolute -bottom-2 left-0 right-0 w-full text-hot-800">
                        <path
                            d="M152.949 8.10189C161.935 8.33532 170.934 8.55526 179.909 8.80962C182.223 8.87518 184.539 9.01422 186.758 9.17697C191.46 9.51502 194.982 11.4913 189.647 12.2957C190.339 12.432 190.996 12.558 191.819 12.7179C182.14 13.68 172.103 13.9502 161.9 14.0283C140.179 14.1962 118.447 14.3087 96.7391 14.5342C80.9741 14.6993 65.2571 15.0271 49.5035 15.2527C45.8154 15.3052 42.0452 15.2973 38.3936 15.1843C36.6261 15.1294 34.4064 14.849 33.5592 14.524C32.4973 14.1148 31.8648 13.5015 32.4973 13.0825C32.9506 12.7779 35.7081 12.4952 37.5327 12.4641C44.8369 12.3352 52.1765 12.3092 59.5046 12.2436C90.3061 11.9684 121.096 11.7061 151.899 11.4048C156.172 11.3629 160.408 11.1295 164.656 10.9826C164.656 10.9017 164.645 10.8198 164.632 10.7389C161.53 10.6473 158.427 10.4925 155.312 10.4715C130.346 10.2934 105.368 10.0023 80.4009 10.0363C67.4528 10.0549 54.5389 10.7022 41.5793 10.9881C33.7031 11.1634 25.7309 11.3285 17.8536 11.2527C9.81064 11.1737 7.11368 9.59361 11.7563 8.1177C15.6704 6.87289 20.3964 6.07588 27.7234 5.90569C46.4959 5.47324 65.1726 4.85479 83.9223 4.38514C100.093 3.98152 116.311 3.6802 132.505 3.33145C133.174 3.31564 133.818 3.2631 134.379 3.1222C128.663 3.1222 122.935 3.11662 117.219 3.12685C115.989 3.12685 114.759 3.21334 113.519 3.21613C92.0611 3.29983 70.5916 3.38121 49.1335 3.45189C36.9481 3.49141 24.7638 3.51234 12.5795 3.52303C10.2287 3.52492 7.87893 3.48194 5.53798 3.39423C2.04061 3.2631 -0.0226487 2.65488 0.000187597 1.88437C0.000187597 1.32358 1.0164 1.01482 3.76018 1.02505C10.4672 1.05109 17.1742 1.08271 23.8812 1.0669C46.8659 1.00924 69.8631 0.870206 92.849 0.875321C125.286 0.880901 157.735 0.948791 190.16 1.06923C200.078 1.10643 209.97 1.39473 219.864 1.59096C223.552 1.66443 226.523 2.01039 227.884 2.83623C229.089 3.56721 228.027 3.86388 224.602 3.74298C223.74 3.71331 222.876 3.69671 222.012 3.69322C221.559 3.69322 221.093 3.72717 220.234 3.76111C221.057 3.97083 221.725 4.11777 222.263 4.28563C225.604 5.3263 224.137 6.15168 218.527 6.31722C203.132 6.76269 187.737 7.20537 172.331 7.60387C168.524 7.70338 164.621 7.60387 160.778 7.6434C158.14 7.67223 155.515 7.78243 152.889 7.85823L152.937 8.09956L152.949 8.10189Z" />
                    </svg>


                </span>
            </p>
            </p>
        </div>
        <div class="absolute left-0 right-0 bottom-0 flex items-center justify-center py-4">
            <button type="submit"
                class="bg-hot-700 p-0.5 rounded-full flex items-center justify-center group hover:scale-110 hover:delay-750"
                onclick='document.getElementById("best_sellers")?.scrollIntoView({ behavior: "smooth", block: "start" });'>
                <x-feathericon-chevron-down class="text-white group-hover:text-gray-200 w-11 h-11" />
            </button>
        </div>
    </section>
    {{-- Best Sellers --}}
    <section class="py-12" id="best_sellers">
        <h2 class="text-7xl text-center">BESTSELLERS</h2>
        <div class="flex flex-col items-center justify-center mt-12 mb-4">
            <a href="{{ route('hot-tubs') }}"
                class="inline-block mx-auto bg-hot-700/55 px-4 py-1.5 text-lg font-semibold text-white">ALL HOT TUBS</a>
            <div class="w-full px-24 py-5 relative">
                <button type="button" id="prevArrow" data-slick="product-slick"
                    class="absolute z-30 p-2 top-1/2 left-8 bg-white shadow-md rounded-full">
                    <x-feathericon-arrow-left class="text-lg" />
                </button>
                <button type="button" id="nextArrow" data-slick="product-slick"
                    class="absolute z-30 p-2 top-1/2 right-8 bg-white shadow-md rounded-full">
                    <x-feathericon-arrow-right class="text-lg" />
                </button>
                <div class="product-slick relative space-x-4 overflow-hidden">
                    @foreach ($all_products as $product)
                        <a href="{{ route('learn-more', ['slug' => $product->slug]) }}"
                            class="inline-block relative p-4">
                            <div class="relative">
                                <img src="{{ asset('/img/products/showcase/' . $product->slug . '_main_showcase.jpg') }}"
                                    alt="First Image" class="shadow-md shadow-gray-400">
                                <div
                                    class="absolute cursor-pointer bottom-2 left-2 text-lg bg-hot-700/75 text-white rounded-[2rem] px-6 py-2 hover:text-gray-300">
                                    The
                                    {{ Str::ucfirst($product->slug) }}</div>
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    {{-- Need Help  --}}
    <section class="relative bg-hot-90">
        <div class="bg-[#293D52] flex items-center justify-center w-full py-12 px-20">
            <div class="space-y-4 px-5">
                <h2 class="text-6xl text-white font-bold text-center">Need Help Deciding?</h2>
                <p class="text-5xl text-white text-center">Meet with one of our
                    representatives
                    today!</p>
                <p class="text-4xl text-white text-center">Schedule a phone consultation at a time that's convenient for
                    you.</p>
            </div>
            <div class="-ms-10">
                <button class="bg-hot-700 py-3 px-12 rounded-[3rem] text-3xl text-white tracking-wide">Schedule a
                    <br />
                    Consultation</button>
            </div>
        </div>
    </section>
    {{-- local source  --}}
    <section class="relative z-10 pt-16 pb-10 px-12">
        <div class="absolute block w-full top-0 inset-0 z-50 overflow-hidden bg-cover bg-no-repeat pointer-events-none bg-top"
            {{-- style="background-image: url('{{ asset('/img/wavy.svg') }}');"> --}}
            style="background-image: url('https://www.dothanhottubs.com/web_editor/shape/web_editor%2FOrigins%2F11_001.svg?c3=%23293D52&c4=%23FFFFFF');">
            <h2></h2>
        </div>
        <div class="relative">
            <div class="space-y-6 pb-24 px-16">
                <h2 class="text-7xl text-center text-hot-700">YOUR <span class="font-bold">TRUSTED</span> LOCAL SOURCE
                </h2>
                <p class="text-gray-700 italic text-4xl text-center">Proudly Serving Alabama,
                    Georgia, and
                    North Florida</p>
                <p class="text-gray-900 text-xl text-center tracking-tighter">With Dothan Hot Tub Warehouse, you can
                    start
                    relaxing in no time. As your trusted local source for all
                    things hot tub, we’re here to help you find the perfect hot tub for your family. Enjoy superior
                    hydrotherapy and unmatched quality, all with the convenience of local service and support.</p>
            </div>
            {{-- Gallery is here --}}
            <div class="text-center flex items-center justify-center">
                <x-frontend.gallery />
            </div>

        </div>
    </section>
    {{-- Quick comparison --}}
    <section class="relative z-10 bg-hot-700 text-white pt-14 px-24">
        <div class="absolute block w-full -top-2 inset-0 z-50 overflow-hidden bg-cover bg-no-repeat pointer-events-none bg-top"
            style="background-image: url('{{ asset('/img/wavy.svg') }}');">
            <h2></h2>
        </div>
        <div class="relative z-10 w-full grid grid-cols-2 items-center">
            <div class="flex flex-nowrap items-center gap-x-5 px-6">
                <img src={{ asset('/img/full_power_wave.webp') }} alt="Full-Power Hot Tubs Image"
                    class="max-w-96 w-44 rounded-full p-1.5 bg-white shadow-md shadow-gray-600">
                <div class="space-y-2 py-12">
                    <h2 class="text-4xl font-normal ">Full-Power Hot Tubs</h2>
                    <p class="hyphens-manual text-base font-normal">Bring home the full power and
                        hydrotherapy with a
                        full&shy;powered (220V)
                        hot tub.</p>
                    <a href=""
                        class="hidden px-5 py-2 rounded-3xl border border-hot-500 transition-all duration-100 hover:bg-hot-500 focus:outline-2 focus:outline-hot-500">Learn
                        More</a>
                </div>
            </div>
            <div class="flex flex-nowrap items-center gap-x-5 px-6">
                <img src={{ asset('/img/plug_and_play_wave.webp') }} alt="Plug-and-Play Hot Tubs"
                    class="max-w-96 w-44 rounded-full p-1.5 bg-white shadow-md shadow-gray-600">
                <div class="space-y-2 py-12">
                    <h2 class="text-4xl font-normal ">Plug-and-Play Hot Tubs</h2>
                    <p class="hyphens-manual text-base font-normal">Experience the simplicity of a plug-and-play hot
                        tub, without compromising on quality.</p>
                    <a href=""
                        class="hidden px-5 py-2 rounded-3xl border border-hot-500 transition-all duration-100 hover:bg-hot-500 focus:outline-2 focus:outline-hot-500">Learn
                        More</a>
                </div>
            </div>
        </div>
    </section>
    <section class="relative bg-white pb-48">
        <div class="relative z-10 bg-gray-300 text-gray-800 pt-20 pb-20">
            <div class="absolute block w-full top-0 inset-0 z-50 overflow-hidden bg-cover bg-no-repeat pointer-events-none bg-top"
                {{-- style="background-image: url('{{ asset('/img/wavy.svg') }}');"> --}}
                style="background-image: url('https://www.dothanhottubs.com/web_editor/shape/web_editor%2FOrigins%2F11_001.svg?c3=%2300899C&c4=%23CED4DA');">
                <h2></h2>
            </div>
            <div class="py-6">
                <div class="px-48 space-y-3">
                    <h2 class="text-5xl text-center ">Luxury without compromise.</h2>
                    <p class="text-3xl text-center">Dive into the ultimate hydrotherapy experience with our top-tier
                        hot
                        tubs, bringing
                        unmatched quality and
                        relaxation right to your home.</p>
                </div>
                <div class="center mt-5">
                    <a href="" class="light-btn !inline-block mx-auto rounded-3xl">Contact us!</a>
                </div>
            </div>
            <div class="absolute grid top-[82%] grid-cols-6 gap-x-20 px-36">
                @foreach ($animals as $animal)
                    <div class="space-y-7">
                        <img src="{{ asset('img/products/icons/' . $animal . '.jpg') }}"
                            alt="{{ $animal }} Logo" class="rounded-full" />
                        <a href="" class="block text-center py-1 bg-red-700 text-white rounded-2xl">The
                            {{ Str::ucfirst($animal) }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- Offer --}}
    <x-frontend.offer />
</x-layout>

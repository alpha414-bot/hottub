<x-layout>
    <x-slot:title>
        The {{ Str::ucfirst($product->slug) }} ({{ $product->name }}) - Learn More
    </x-slot:title>
    <x-slot:meta>
        <!-- SEO Meta Tags -->
        <meta name="description"
            content="Discover more about our  {{ Str::ucfirst($product->slug) }} ({{ $product->name }}) hot tubs. Learn about features, benefits, and why our hot tubs are the best choice for relaxation and wellness.">
        <meta name="keywords"
            content="{{ $product->slug }}, {{ $product->name }}, {{ $product->type }}, hot tubs, relaxation, wellness, luxury, features, benefits">
        <meta name="author" content="Your Company Name">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title"
            content="Learn More About The {{ Str::ucfirst($product->slug) }} ({{ $product->name }})">
        <meta property="og:description" content="{{ $product->short_description }}">
        <meta property="og:image" content="{{ asset('images/hottub-feature.jpg') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ $name }}">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title"
            content="Learn More About The {{ Str::ucfirst($product->slug) }} ({{ $product->name }})">
        <meta name="twitter:description" content="{{ $product->short_description }}">
        <meta name="twitter:image" content="{{ asset('images/hottub-feature.jpg') }}">
        <meta name="twitter:site" content="{{ $twitter_link }}">
    </x-slot:meta>
    <x-slot:headjs>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.product-image-gallery').slick({
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    // autoplay: true,
                    // autoplaySpeed: 6000,
                    // prevArrow: $("#prevArrow[data-slick='product-slick']"),
                    // nextArrow: $("#nextArrow[data-slick='product-slick']")
                });
                $('.product-image-gallery-nav').slick({
                    infinite: true,
                    slidesToShow: 9,
                    slidesToScroll: 9,
                    asNavFor: '.product-image-gallery',
                    // autoplay: true,
                    // autoplaySpeed: 6000,
                    // prevArrow: $("#prevArrow[data-slick='product-slick']"),
                    // nextArrow: $("#nextArrow[data-slick='product-slick']")
                });
            });
        </script>
    </x-slot>
    {{-- Quick Intro --}}
    <x-frontend.intro />
    <main class="py-4 space-y-8">
        <div class="px-24 grid grid-cols-2 gap-8">
            <div class="sticky top-10">
                <div class="product-image-gallery-nav">
                    @foreach (range(1, 6) as $key => $d)
                        <div class="inline-block">{{ $key }}</div>
                    @endforeach
                </div>
                <div class="product-image-gallery overflow-hidden">
                    @foreach (range(1, 4) as $key => $d)
                        <a href="" class="inline-block">{{ $key }}</a>
                    @endforeach
                </div>
            </div>
            <div class="space-y-3">
                {{-- Breadcrumb --}}
                <div class="flex gap-2">
                    <a href="" class="text-hot-700 hover:underline underline-offset-2">All Products</a>
                    <span>/</span>
                    <span class="text-gray-600">The {{ Str::ucfirst($product->slug) }}</span>
                </div>
                <div>
                    <h1 class="text-3xl font-bold">The {{ Str::ucfirst($product->slug) }}</h1>
                    <div class="mt-2 text-sm font-mono font-normal text-gray-500">
                        <p class="">
                            {{ $product->measurement }} for up to
                            {{ Str::replace('Seats', 'People', Str::replace(' + 1 Lounger', '', $product->specifications['features']['Seating Configuration'])) }}
                        </p>
                        <p>{{ $product->caption }}</p>
                    </div>
                </div>
                <div>
                    <p class="text-lg font-normal">
                        {{ $product->long_description }}
                    </p>
                    <img src="/img/warranty_notice.jpg" alt="Warrant Notice Image" class="w-48">
                    <ul class="list-disc list-inside italic ms-3">
                        @if ($product->free_delivery)
                            <li>Includes <span class="text-red-500 font-medium">FREE</span> delivery!</li>
                        @endif
                        @if ($product->free_cover)
                            <li>Includes <span class="text-red-500 font-medium">FREE</span> cover!</li>
                        @endif
                        @if ($product->free_color_matching_step)
                            <li>Includes <span class="text-red-500 font-medium">FREE</span> color-matching steps!</li>
                        @endif
                        @if ($product->free_starter_chemical_kit)
                            <li>Includes <span class="text-red-500 font-medium">FREE</span> start chemical kit!</li>
                        @endif

                    </ul>
                </div>
                <div>
                    <h6 class="text-2xl font-semibold">Call us at {{ $telephone }} to learn about estimated delivery
                        times,
                        exclusive discounts, or similar models at incredible prices.</h6>
                </div>
                <p class="text-2xl italic">No need to wait—give us a call!</p>
            </div>
        </div>
        <div>
            <section class="relative z-10 bg-hot-700 text-white pt-14 overflow-hidden">
                <div class="absolute block w-full -top-2 inset-0 z-50 overflow-hidden bg-cover bg-no-repeat pointer-events-none bg-bottom"
                    style="background-image: url('https://www.dothanhottubs.com/web_editor/shape/web_editor%2FWavy%2F12_001.svg?c1=%237FCDCF');">
                    <h2></h2>
                </div>
                <div class="flex flex-row justify-center gap-x-24 items-center pb-16">
                    <div class="flex flex-col items-center justify-center ">
                        <p class="text-6xl font-medium">{{ $product->person_capacity }}</p>
                        <p class="text-lg">Person Capacity</p>
                    </div>
                    <div class="flex flex-col items-center justify-center ">
                        <p class="text-6xl font-medium">{{ $product->specifications['features']['Hydrotherapy Jets'] }}
                        </p>
                        <p class="text-lg">Hydrotherapy Jets</p>
                    </div>
                    <div class="flex flex-col items-center justify-center ">
                        <p class="text-6xl font-medium">{{ $product->specifications['features']['Therapy Pumps'] }}
                        </p>
                        <p class="text-lg">Therapy Pumps</p>
                    </div>
                    <div class="flex flex-col items-center justify-center ">
                        <p class="text-6xl font-medium">{{ $product->specifications['technical']['Water Capacity'] }}
                        </p>
                        <p class="text-lg">Gallons</p>
                    </div>
                    @if ($product->type === 'full-powered-hot-tubs')
                        <div class="flex flex-col items-center justify-center ">
                            <p class="text-6xl font-medium">{{ $product->fully_powered }}
                            </p>
                            <p class="text-lg">Fully Powered</p>
                        </div>
                    @elseif ($product->type === 'plug-and-play-hot-tubs')
                        <div class="flex flex-col items-center justify-center ">
                            <p class="text-6xl font-medium">{{ $product->plug_and_play }}
                            </p>
                            <p class="text-lg">Plug-and-Play</p>
                        </div>
                    @endif
                </div>
            </section>
            <section
                class="w-full bg-hot-700 grid grid-cols-{{ count($product->features) }} gap-x-2 justify-ly px-24 py-10 ">
                @foreach ($product->features as $feature)
                    <div class="flex flex-col items-start justify-start gap-y-3 text-center text-white">
                        <div class="mx-auto bg-cover bg-center bg-no-repeat w-44 h-44 rounded-full border-[5px] border-white"
                            style="background-image: url('{{ asset('/img/products/featuring/' . $feature['img']) }}')">
                        </div>
                        <div class="mt-2 space-y-1 px-3">
                            <p class="text-2xl font-medium">{{ $feature['title'] }}</p>
                            <p class="hidde whitespace-pre-wrap">{{ $feature['description'] }}</p>
                        </div>
                    </div>
                @endforeach
            </section>
            <div class="px-24 py-10 space-y-8">
                {{-- Top Showcase --}}
                <section>
                    @if ($product->top_showcase)
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($product->top_showcase as $showcase)
                                <img src="{{ asset('/img/products/showcase/' . $showcase) }}" alt=""
                                    class="rounded-md shadow-lg">
                            @endforeach
                        </div>
                    @endif
                </section>
                {{-- Product Details --}}
                <section class="">
                    <div>
                        <ul class="flex flex-wrap items-center gap-x-0.5 -mb-px font-medium text-center"
                            data-tabs-active-classes="bg-hot-700 text-white font-normal py-2"
                            data-tabs-inactive-classes="text-hot-700 font-normal py-1" id="product-tab"
                            data-tabs-toggle="product-tab-content" role="tablist">

                            @if ($product->about)
                                <li role="presentation">
                                    <button class="inline-block px-4 rounded-lg" id="about-tab"
                                        data-tabs-target="#about" type="button" role="tab"
                                        aria-controls="about" aria-selected="true">About</button>
                                </li>
                            @endif
                            @if ($product->ambiance)
                                <li role="presentation">
                                    <button class="inline-block px-4 rounded-lg" id="ambiance-tab"
                                        data-tabs-target="#ambiance" type="button" role="tab"
                                        aria-controls="ambiance" aria-selected="false">Ambiance</button>
                                </li>
                            @endif
                            @if ($product->therapy)
                                <li role="presentation">
                                    <button class="inline-block px-4 rounded-lg" id="therapy-tab"
                                        data-tabs-target="#therapy" type="button" role="tab"
                                        aria-controls="therapy" aria-selected="false">Therapy</button>
                                </li>
                            @endif
                            @if ($product->water_care)
                                <li role="presentation">
                                    <button class="inline-block px-4 rounded-lg" id="water_care-tab"
                                        data-tabs-target="#water_care" type="button" role="tab"
                                        aria-controls="water_care" aria-selected="false">Water Care</button>
                                </li>
                            @endif
                            @if ($product->audio_system)
                                <li role="presentation">
                                    <button class="inline-block px-4 rounded-lg" id="audio_system-tab"
                                        data-tabs-target="#audio_system" type="button" role="tab"
                                        aria-controls="audio_system" aria-selected="false">Audio System</button>
                                </li>
                            @endif
                            <li role="presentation">
                                <button class="inline-block px-4 rounded-lg" id="specifications-tab"
                                    data-tabs-target="#specifications" type="button" role="tab"
                                    aria-controls="specifications" aria-selected="false">Specifications</button>
                            </li>
                        </ul>
                    </div>
                    <div id="product-tab-content" class="rich-editor mt-3">
                        <div class="hidden py-4 " id="about" role="tabpanel" aria-labelledby="about-tab">
                            {!! $product->about !!}
                        </div>
                        <div class="hidden p-4" id="ambiance" role="tabpanel" aria-labelledby="ambiance-tab">
                            {!! $product->ambiance !!}
                        </div>
                        <div class="hidden p-4" id="therapy" role="tabpanel" aria-labelledby="therapy-tab">
                            {!! $product->therapy !!}
                        </div>
                        <div class="hidden p-4" id="water_care" role="tabpanel" aria-labelledby="water_care-tab">
                            {!! $product->water_care !!}
                        </div>
                        <div class="hidden p-4" id="audio_system" role="tabpanel"
                            aria-labelledby="audio_system-tab">
                            {!! $product->audio_system !!}
                        </div>
                        <div class="hidden p-4" id="specifications" role="tabpanel"
                            aria-labelledby="specifications-tab">
                            <div class="grid grid-cols-2 gap-24">
                                <div class="space-y-2">
                                    <h2 class="text-3xl text-center">Features</h2>
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-900">
                                        <tbody>
                                            @foreach ($product->specifications['features'] as $key => $value)
                                                @if ($key != 'therapy_pump_hp')
                                                    <tr class=" border-b border-gray-500">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                            {{ $key }}
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {{ $key == 'Therapy Pumps' ? $value . ' Dual-Speed (' . $product->specifications['features']['therapy_pump_hp'] . '.0 hp) ' : $value }}
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="space-y-2">
                                    <h2 class="text-3xl text-center">Technical</h2>
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-900">
                                        <tbody>
                                            @foreach ($product->specifications['technical'] as $key => $value)
                                                <tr class="border-b border-gray-500">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                        {{ $key }}
                                                    </th>
                                                    <td class="px-6 py-4">
                                                        {{ $value }}
                                                        {{ $key == 'Dry Weight' || $key == 'Filled Weight' ? 'lbs.' : '' }}
                                                        {{ $key == 'Water Capacity' ? 'gallons' : '' }}
                                                        {{ $key == 'Filters' ? 'sq. ft.' : '' }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- Offer --}}
                <x-frontend.offer />
                {{-- Bottom Showcase --}}
                <section>
                    @if ($product->bottom_showcase)
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($product->bottom_showcase as $showcase)
                                <img src="{{ asset('/img/products/showcase/' . $showcase) }}" alt=""
                                    class="rounded-md shadow-lg">
                            @endforeach
                        </div>
                    @endif
                </section>
                {{-- Owners Manual --}}
                <section class="w-full flex items-center justify-center py-8">
                    <div
                        class="w-[42rem] mx-auto py-6 px-5 bg-gray-200 border border-black rounded-2xl inline-grid grid-cols-2 items-center gap-x-4">
                        <div>
                            <img src="{{ asset('/img/manual_cover.svg') }}" alt="">
                        </div>
                        <div>
                            <p class="text-4xl">Owner's Manual</p>
                            <p class="text-lg">A copy of the Spa Owner's Manual will be delivered with the hot tub. Or,
                                you
                                may download a
                                copy here.</p>
                            <a href="" download=""
                                class="block rounded-2xl overflow-hidden w-8 h-14 bg-contain bg-center bg-no-repeat"
                                style="background-image: url('{{ asset('/img/pdf.svg') }}')"></a>
                        </div>
                    </div>
                </section>
            </div>
            <div class="bg-gray-300 pt-8 pb-5 px-24">
                <p class="text-2xl">You might also be interested in...</p>
            </div>
            <div class="px-24 py-10">
                @if (count($similar) > 0)
                    <div class="grid grid-cols-5 items-start gap-6 pt-20">
                        @foreach ($similar as $product)
                            <a target="_blank" href="{{ route('learn-more', ['slug' => $product->slug]) }}"
                                class="relative border border-gray-200 rounded-lg px-3 py-3 w-full flex flex-col items-center">
                                <img src="{{ asset('/img/products/' . $product->slug . '/' . $product->images[0]) }}"
                                    alt="First Image" class=" -mt-24 rounded-lg w-52">
                                <div class="mt-2">
                                    <h5 class="text-lg text-center font-semibold">The
                                        {{ Str::ucfirst($product->slug) }}
                                        <h5 class="text-base text-center font-medium">({{ $product->name }})
                                        </h5>
                                        <p class="text-center ">{{ $product->measurement }}</p>
                                        <div class="cursor-pointer inline-block mx-auto learn-more-btn mt-2">Learn More
                                        </div>
                                </div>
                            </a>
                        @endforeach

                    </div>
                @endif
            </div>
        </div>
    </main>
</x-layout>

<x-layout>
    <x-slot:title>
        {{ $product->name }} - Learn More
    </x-slot>
    <x-slot:meta>
        <!-- SEO Meta Tags -->
        <meta name="description"
            content="Discover more about our {{ $product->name }} - The {{ Str::ucfirst($product->name) }} hot tubs. Learn about features, benefits, and why our hot tubs are the best choice for relaxation and wellness.">
        <meta name="keywords"
            content="{{ $product->slug }}, {{ $product->name }}, {{ $product->type }}, hot tubs, relaxation, wellness, luxury, features, benefits" />

        <!-- Open Graph Meta Tags -->
        <meta property="og:title"
            content="Learn More About {{ $product->name }} - The {{ Str::ucfirst($product->name) }}">
        <meta property="og:description" content="{{ $product->short_description }}">
        <meta property="og:image" content="{{ asset('images/hottub-feature.jpg') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="website">
        <meta property="og:site_name" content="{{ $appname }}">

        <!-- Twitter Card Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title"
            content="Learn More About {{ $product->name }} - The {{ Str::ucfirst($product->name) }}">
        <meta name="twitter:description" content="{{ $product->short_description }}">
        <meta name="twitter:image" content="{{ asset('images/hottub-feature.jpg') }}">
        <meta name="twitter:site" content="{{ $twitter_link }}">
    </x-slot>
    {{-- Quick Intro --}}
    <x-frontend.intro />
    <main class="py-4 space-y-8">
        <div class="z-10 px-4 xl:px-24 grid md:grid-cols-2 items-start gap-x-8 gap-y-4 xl:pb-32">
            <div class="block gap-2 md:hidden">
                <a href="{{ route('hot-tubs') }}" class="text-hot-700 hover:underline underline-offset-2">All
                    Products</a>
                <span>/</span>
                <span class="text-gray-600">{{ $product->name }}</span>
            </div>
            <div class="xl:sticky top-0 py-4 h-auto z-30">
                <div data-lightbox="true" id="product-image-gallery" data-images="{{ json_encode($product->images) }}"
                    data-directory="{{ asset('/img/products/' . $product->slug . '/') }}"
                    data-thumbnail-position="left"></div>
            </div>
            <div class="space-y-5 xl:py-12">
                {{-- Breadcrumb --}}
                <div class="hidden gap-2 md:block">
                    <a href="{{ route('hot-tubs') }}" class="text-hot-700 hover:underline underline-offset-2">All
                        Products</a>
                    <span>/</span>
                    <span class="text-gray-600">{{ $product->name }}</span>
                </div>
                {{-- Title & Caption --}}
                <div>
                    <h1 class="text-4xl font-bold">{{ $product->name }}</h1>
                    <div class="mt-2 text-sm font-mono font-normal text-gray-500">
                        <p class="">
                            {{ $product->measurement }} for up to
                            {{ Str::replace('Seats', 'People', Str::replace(' + 1 Lounger', '', $product->specifications['features']['Seating Configuration'])) }}
                        </p>
                        <p>{{ $product->caption }}</p>
                    </div>
                </div>
                {{-- Description & Offer --}}
                <div>
                    <p class="text-lg font-normal">
                        {{ $product->long_description }}
                    </p>
                    <img src="{{ asset('/img/warranty_notice.jpg') }}" alt="Warrant Notice Image" class="w-48">
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
                <div class="space-y-12">
                    <div>
                        <h6 class="text-2xl font-semibold">Call us at {{ $telephone }} to learn about estimated
                            delivery
                            times,
                            exclusive discounts, or similar models at incredible prices.</h6>
                    </div>
                    <p class="text-2xl italic">No need to wait—give us a call!</p>
                </div>
            </div>
        </div>
        <div class="relative z-20">
            {{-- Value data --}}
            <section class="relative z-10 bg-hot-700 text-white pt-8 overflow-hidden md:pt-14">
                <div class="hidden absolute w-full -top-2 inset-0 z-50 overflow-hidden bg-cover bg-no-repeat pointer-events-none bg-bottom xl:block"
                    style="background-image: url('{{ asset('/img/double_wavy.svg') }}');">
                    <h2></h2>
                </div>
                <div
                    class="flex flex-wrap flex-col justify-center gap-x-14 gap-y-7 items-center pb-16 xl:gap-x-24 md:flex-row md:justify-evenly">
                    @isset($product->person_capacity)
                        <div class="flex flex-col items-center justify-center ">
                            <p class="text-6xl font-medium">{{ $product->person_capacity }}</p>
                            <p class="text-lg">Person Capacity</p>
                        </div>
                    @endisset
                    @if ($product->type === 'plug-and-play-hot-tubs' or $product->type == 'full-powered-hot-tubs')
                        @isset($product->specifications['features']['Hydrotherapy Jets'])
                            <div class="flex flex-col items-center justify-center ">
                                <p class="text-6xl font-medium">
                                    {{ $product->specifications['features']['Hydrotherapy Jets'] }}
                                </p>
                                <p class="text-lg">Hydrotherapy Jets</p>
                            </div>
                        @endisset
                    @elseif($product->type == 'cold-spas')
                        @isset($product->chilled_temperature)
                            <div class="flex flex-col items-center justify-center ">
                                <p class="text-6xl font-medium">
                                    {{ $product->chilled_temperature }}
                                </p>
                                <p class="text-lg">Chilled Temperature</p>
                            </div>
                        @endisset
                    @endif
                    @isset($product->specifications['features']['Therapy Pumps'])
                        <div class="flex flex-col items-center justify-center ">
                            <p class="text-6xl font-medium">{{ $product->specifications['features']['Therapy Pumps'] }}
                            </p>
                            <p class="text-lg">Therapy Pumps</p>
                        </div>
                    @endisset
                    @isset($product->specifications['technical']['Water Capacity'])
                        <div class="flex flex-col items-center justify-center ">
                            <p class="text-6xl font-medium">{{ $product->specifications['technical']['Water Capacity'] }}
                            </p>
                            <p class="text-lg">Gallons</p>
                        </div>
                    @endisset

                    @if ($product->type === 'full-powered-hot-tubs')
                        @isset($product->fully_powered)
                            <div class="flex flex-col items-center justify-center ">
                                <p class="text-6xl font-medium">{{ $product->fully_powered }}
                                </p>
                                <p class="text-lg">Fully Powered</p>
                            </div>
                        @endisset
                    @elseif ($product->type === 'plug-and-play-hot-tubs' or $product->type == 'cold-spas')
                        @isset($product->plug_and_play)
                            <div class="flex flex-col items-center justify-center ">
                                <p class="text-6xl font-medium">{{ $product->plug_and_play }}
                                </p>
                                <p class="text-lg">Plug-and-Play</p>
                            </div>
                        @endisset
                    @endif
                </div>
            </section>
            @if (count($product->features) > 0)
                <section
                    class="hidden w-full bg-hot-700 grid-cols-{{ count($product->features) }} gap-x-2 justify-ly px-24 py-10 xl:grid">
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
            @endif
            <div class="px-4 py-4 space-y-8 md:px-8 xl:px-24 md:py-10">
                {{-- Top Showcase --}}
                <section>
                    @if ($product->top_showcase)
                        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                            @foreach ($product->top_showcase as $showcase)
                                <a href="{{ asset('/img/products/showcase/' . $showcase) }}"
                                    data-fslightbox="top_showcase">
                                    <img src="{{ asset('/img/products/showcase/' . $showcase) }}" alt=""
                                        class="rounded-md shadow-lg">
                                </a>
                            @endforeach
                        </div>
                    @endif
                </section>
                {{-- Product Details --}}
                <section class="">
                    <div>
                        <ul class="flex flex-wrap items-center gap-x-0.5 gap-y-2 font-medium text-center"
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
                            <li role="presentation">
                                <button class="inline-block px-4 rounded-lg" id="warranty-tab"
                                    data-tabs-target="#warranty" type="button" role="tab"
                                    aria-controls="warranty" aria-selected="false">Warranty</button>
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
                            <div class="grid grid-cols-1 gap-x-24 gap-y-14 md:grid-cols-2">
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
                        <div class="hidden p-4" id="warranty" role="tabpanel" aria-labelledby="warranty-tab">
                            <div class="space-y-4 text-base">
                                @foreach ($product->warranty as $key => $value)
                                    <p class="space-x-1">
                                        <span class="font-bold">{{ $key }}:</span>
                                        <span class="">{{ $value }}</span>
                                    </p>
                                @endforeach
                                <p class="">See additional warranty information <a
                                        href="{{ route('warranty') }}">here</a>.</p>
                            </div>
                        </div>
                    </div>
                </section>
                @if ($product->type === 'plug-and-play-hot-tubs' or $product->type == 'full-powered-hot-tubs')
                    {{-- Offer --}}
                    <x-frontend.offer />
                    {{-- Bottom Showcase --}}
                    <section>
                        @if ($product->bottom_showcase)
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                                @foreach ($product->bottom_showcase as $showcase)
                                    <a href="{{ asset('/img/products/showcase/' . $showcase) }}"
                                        data-fslightbox="bottom_showcase">
                                        <img src="{{ asset('/img/products/showcase/' . $showcase) }}" alt=""
                                            class="rounded-md shadow-lg">
                                    </a>
                                @endforeach
                            </div>
                        @endif
                    </section>
                    {{-- Owners Manual --}}
                    <section class="w-full flex items-center justify-center py-8">
                        <div
                            class="w-[42rem] mx-auto py-6 px-5 bg-gray-200 border border-black rounded-2xl inline-grid grid-cols-1 items-center gap-x-4 gap-y-4 md:grid-cols-2">
                            <div>
                                <img src="{{ asset('/img/manual_cover.svg') }}" alt="">
                            </div>
                            <div>
                                <p class="text-4xl">Owner's Manual</p>
                                <p class="text-lg">A copy of the Spa Owner's Manual will be delivered with the hot tub.
                                    Or,
                                    you
                                    may download a
                                    copy here.</p>
                                <a href="{{ asset('manual.pdf') }}" download="Owner's Manual"
                                    class="block rounded-2xl overflow-hidden w-8 h-14 bg-contain bg-center bg-no-repeat"
                                    style="background-image: url('{{ asset('/img/pdf.svg') }}')"></a>
                            </div>
                        </div>
                    </section>
                @endif
            </div>
            <div class="bg-gray-300 pt-8 pb-5 px-4 sm:px-8 xl:px-24">
                <p class="text-2xl">You might also be interested in...</p>
            </div>
            <div class="px-4 xl:px-24 py-10">
                @if (count($similar) > 0)
                    <div class="grid grid-cols-1 items-start gap-x-6 gap-y-32 pt-20 sm:grid-cols-3 xl:grid-cols-5">
                        @foreach ($similar as $product)
                            <a href="{{ route('learn-more', ['name' => $product->name]) }}"
                                class="relative border border-gray-400 rounded-lg px-3 py-3 w-full flex flex-col items-center">
                                <img src="{{ asset('/img/products/' . $product->slug . '/' . $product->images[0]) }}"
                                    alt="First Image" class="-mt-20 rounded-lg w-52">
                                <div class="mt-2">
                                    <h5 class="text-lg text-center font-semibold">
                                        <h5 class="text-base text-center font-medium">{{ $product->name }}</h5>
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
    <div class="hidden">
        <div class="grid-cols-1 hidden"></div>
        <div class="grid-cols-2 hidden"></div>
        <div class="grid-cols-3 hidden"></div>
        <div class="grid-cols-4 hidden"></div>
        <div class="grid-cols-5 hidden"></div>
        <div class="grid-cols-6 hidden"></div>
        <div class="grid-cols-7 hidden"></div>
        <div class="grid-cols-8 hidden"></div>
    </div>
</x-layout>

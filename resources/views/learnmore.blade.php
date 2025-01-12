<x-layout>
    <x-slot:title>
        {{ $product->name }} - Learn More
    </x-slot>
    <x-slot:meta>
        <!-- SEO Meta Tags -->
        <meta name="description"
            content="Discover more about our {{ $product->name }} - The {{ Str::ucfirst($product->name) }} swim spas. Learn about features, benefits, and why our swim spas are the best choice for relaxation and wellness.">
        <meta name="keywords"
            content="{{ $product->slug }}, {{ $product->name }}, {{ $product->type }}, swim spas, relaxation, wellness, luxury, features, benefits" />

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
    <x-slot:headjs>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/lightgallery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/lightgallery.min.js"></script>
        <!-- lightgallery plugins -->
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/plugins/thumbnail/lg-thumbnail.umd.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.8.2/plugins/zoom/lg-zoom.umd.js"></script>
        <script type="text/javascript">
            lightGallery(document.getElementById('lightgallery'), {
                plugins: [lgZoom, lgThumbnail],
                licenseKey: '0000-0000-000-0000',
                speed: 500,
            });
        </script>
    </x-slot>
    {{-- Quick Intro --}}
    <x-frontend.intro />
    <main class="py-4 space-y-2">
        <div class="z-10 px-4 xl:px-12 grid md:grid-cols-2 items-start gap-x-8 gap-y-4">
            <div class="block gap-2 md:hidden">
                <a href="{{ route('swim-spas') }}" class="text-hot-700 hover:underline underline-offset-2">All
                    Products</a>
                <span>/</span>
                <span class="text-gray-600">{{ $product->name }}</span>
            </div>
            <div class="xl:sticky top-0 py-4 h-auto z-30" id="lightgallery">
                <a href="{{ asset('/img/products/' . $product->slug . '_' . $product->images[0]) }}"
                    class="block p-4 bg-gray-200 rounded-lg w-full md:w-3/4 mx-auto">
                    <div class="block w-full h-72 bg-contain bg-center bg-no-repeat md:h-96"
                        style="background-image: url('{{ asset('/img/products/' . $product->slug . '_' . $product->images[0]) }}')">
                    </div>
                </a>
            </div>
            <div class="space-y-5 xl:py-12 px-8 bg-gray-200">
                {{-- Breadcrumb --}}
                <div class="hidden gap-2 md:block">
                    <a href="{{ route('swim-spas') }}" class="text-hot-700 hover:underline underline-offset-2">All
                        Products</a>
                    <span>/</span>
                    <span class="text-gray-600">{{ $product->name }}</span>
                </div>
                {{-- Title & Caption --}}
                <div>
                    <h1 class="text-5xl font-bold">{{ $product->name }}</h1>
                    <p class="text-lg font-semibold italic">by {{ $product->type }}</p>
                    <div class="mt-2 text-sm font-mono font-normal text-gray-500">
                        <p class="">
                            {{ $product->measurement }} {{ $product->long_caption }}
                        </p>
                        <p>{{ $product->caption }}</p>
                    </div>
                </div>
                {{-- Description & Offer --}}
                <div>
                    <div class="text-lg font-normal rich-editor">
                        {!! $product->long_description !!}
                    </div>
                </div>
                <a href="{{ route('contact-us') }}"
                    class="inline-block bg-hot-700 text-white px-9 py-3.5 text-xl font-bold rounded-md">GET A QUOTE</a>
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
            <div class="px-4 py-4 space-y-8 md:px-8 xl:px-24 md:py-10">
                {{-- Product Details --}}
                <section class="flex flex-col gap-x-12 md:flex-row">
                    <div>
                        <ul class="flex flex-row flex-wrap items-center justify-center gap-x-0.5 gap-y-1 font-medium text-center whitespace-nowrap md:flex-col md:items-start md:gap-y-2 md:justify-start py-2"
                            data-tabs-active-classes="bg-hot-700 text-white font-normal py-2"
                            data-tabs-inactive-classes="text-hot-700 font-normal py-1" id="product-tab"
                            data-tabs-toggle="product-tab-content" role="tablist">
                            <li role="presentation">
                                <button class="inline-block pl-4 pr-8 py-3 rounded-lg" id="specifications-tab"
                                    data-tabs-target="#specifications" type="button" role="tab"
                                    aria-controls="specifications" aria-selected="false">Specifications</button>
                            </li>
                            @isset($product->specifications['features']['Standard Features'])
                                <li role="presentation">
                                    <button class="inline-block pl-4 pr-8 py-3 rounded-lg" id="standardfeatures-tab"
                                        data-tabs-target="#standardfeatures" type="button" role="tab"
                                        aria-controls="standardfeatures" aria-selected="false">Standard Features</button>
                                </li>
                            @endisset
                            @isset($product->specifications['features']['Exclusive Add-Ons'])
                                <li role="presentation">
                                    <button class="inline-block pl-4 pr-8 py-3 rounded-lg" id="exclusiveaddons-tab"
                                        data-tabs-target="#exclusiveaddons" type="button" role="tab"
                                        aria-controls="exclusiveaddons" aria-selected="false">Exclusive Add-Ons</button>
                                </li>
                            @endisset
                            @isset($product->specifications['features']['Exclusive Options'])
                                <li role="presentation">
                                    <button class="inline-block pl-4 pr-8 py-3 rounded-lg" id="exclusiveoptions-tab"
                                        data-tabs-target="#exclusiveoptions" type="button" role="tab"
                                        aria-controls="exclusiveoptions" aria-selected="false">Exclusive Options</button>
                                </li>
                            @endisset
                            @isset($product->specifications['features']['Warranty'])
                                <li role="presentation">
                                    <button class="inline-block pl-4 pr-8 py-3 rounded-lg" id="warranty-tab"
                                        data-tabs-target="#warranty" type="button" role="tab" aria-controls="warranty"
                                        aria-selected="false">Warranty</button>
                                </li>
                            @endisset
                        </ul>
                    </div>
                    <div id="product-tab-content" class="grow w-full rich-editor mt-0 border-2 border-gray-300">
                        <div class="hidden p-4" id="specifications" role="tabpanel"
                            aria-labelledby="specifications-tab">
                            <div class="grid grid-cols-1 gap-x-24 gap-y-14 md:grid-cols-2">
                                <div class="space-y-2">
                                    <h2 class="text-3xl text-center">Features</h2>
                                    <table class="w-full text-sm text-left rtl:text-right text-gray-900">
                                        <tbody class="align-top">
                                            @foreach ($product->specifications['features'] as $key => $value)
                                                @php
                                                    $key = trim($key);
                                                    $slug_key = Str::slug($key, '-');
                                                @endphp
                                                @if ($slug_key != 'warranty' && $slug_key != 'standard-features' && $slug_key != 'exclusive-add-ons')
                                                    <tr class=" border-b border-gray-500">
                                                        <th scope="row"
                                                            class="px-6 py-4 font-medium text-gray-900 md:whitespace-nowrap">
                                                            {{ $key }}
                                                        </th>
                                                        <td class="px-6 py-4">
                                                            {!! $key == 'Therapy Pumps'
                                                                ? $value . ' Dual-Speed (' . $product->specifications['features']['therapy_pump_hp'] . '.0 hp) '
                                                                : $value !!}
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
                                        <tbody class="align-top">
                                            @foreach ($product->specifications['technical'] as $key => $value)
                                                <tr class="border-b border-gray-500">
                                                    <th scope="row"
                                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                                        {{ $key }}
                                                    </th>
                                                    <td class="px-6 py-4">
                                                        {!! $value !!}
                                                        {!! $key == 'Dry Weight' || $key == 'Filled Weight' ? 'lbs.' : '' !!}
                                                        {!! $key == 'Water Capacity' || $key == 'Gallons' ? 'gallons' : '' !!}
                                                        {!! $key == 'Filters' ? 'sq. ft.' : '' !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        @isset($product->specifications['features']['Standard Features'])
                            <div class="hidden p-4" id="standardfeatures" role="tabpanel"
                                aria-labelledby="standardfeatures-tab">
                                <p class="">
                                    {!! $product->specifications['features']['Standard Features'] !!}
                                </p>
                            </div>
                        @endisset
                        @isset($product->specifications['features']['Exclusive Add-Ons'])
                            <div class="hidden p-4" id="exclusiveaddons" role="tabpanel"
                                aria-labelledby="exclusiveaddons-tab">
                                <p>{!! $product->specifications['features']['Exclusive Add-Ons'] !!}</p>
                            </div>
                        @endisset
                        @isset($product->specifications['features']['Exclusive Options'])
                            <div class="hidden p-4" id="exclusiveoptions" role="tabpanel"
                                aria-labelledby="exclusiveoptions-tab">
                                <p>{!! $product->specifications['features']['Exclusive Options'] !!}</p>
                            </div>
                        @endisset
                        @isset($product->specifications['features']['Warranty'])
                            <div class="hidden p-4" id="warranty" role="tabpanel" aria-labelledby="warranty-tab">
                                <span class="underline underline-offset-2 decoration-dotted font-medium">Current warrant on
                                    {{ $product->name }}:</span>
                                {!! $product->specifications['features']['Warranty'] !!}
                            </div>
                        @endisset
                    </div>
                </section>
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
                                <img src="{{ asset('/img/products/' . $product->slug . '_' . $product->images[0]) }}"
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

</x-layout>

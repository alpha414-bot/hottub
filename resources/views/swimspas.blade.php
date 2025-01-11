<x-layout>
    <x-slot:title>
        Swim Spas
    </x-slot>

    <x-slot:meta>
        <meta name="description"
            content="Explore our range of luxurious swim spas. Perfect for relaxation and rejuvenation.">
        <meta name="keywords" content="swim spas, luxury swim spas, relaxation, spa, wellness">
        <meta property="og:title" content="Swim Spas">
        <meta property="og:description"
            content="Explore our range of luxurious swim spas. Perfect for relaxation and rejuvenation.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/hottub.jpg') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Swim Spas">
        <meta name="twitter:description"
            content="Explore our range of luxurious swim spas. Perfect for relaxation and rejuvenation.">
        <meta name="twitter:image" content="{{ asset('images/hottub.jpg') }}">
    </x-slot>
    <x-slot:headjs>
        <script>
            $(document).ready(function() {
                var $containerEl = document.querySelector(".mixitup-product-wrapper");
                mixitup($containerEl, {
                    multifilter: {
                        enable: true,
                    },
                    pagination: {
                        limit: 8, // 12
                        maintainActivePage: true,
                        hidePageListIfSinglePage: true,
                    },
                    animation: {
                        // effects: "fade rotateZ(-180deg)" /* fade scale */,
                        duration: 700 /* 600 */ ,
                    },
                    selectors: {
                        target: ".mix-target" /* .mix */ ,
                    },
                    callbacks: {
                        onMixStart: function(state, futureState) {
                            const selector =
                                futureState.activeFilter.selector.match(/\.(\w[\w-]*)/);
                            console.log("state", state);
                        },
                    },
                })
            });
        </script>
    </x-slot>

    {{-- Quick Intro --}}
    <x-frontend.intro />
    <section class="pt-16 px-4 sm:px-12 xl:px-32 ">
        <div class="space-y-8">
            <div class="filter flex flex-col items-stretch gap-4 justify-between md:flex-row">
                <div class="grow" data-filter-group="search">
                    <input id="name" type="search" placeholder="Search for produt name/product type"
                        data-search-attribute="data-product-name"
                        class="min-w-full md:min-w-[55%] rounded-md focus:border-none focus:ring-hot-600 outline-hot-600" />
                </div>
                <div data-filter-group="category">
                    <select id="category" class="min-w-full md:min-w-max rounded-md focus:border-none focus:ring-hot-600 outline-hot-600">
                        <option value="">All</option>
                        <option value=".product-category-generation_hot_tubs">Generation Hot Tub</option>
                        <option value=".product-category-gulfsouthspas">Gulfsouthspas</option>
                        <option value=".product-category-pdc_spas">PDC Spas</option>
                    </select>

                </div>
            </div>
            <div class="mixitup-product-wrapper grid grid-cols-1 gap-x-8 gap-y-6 md:grid-cols-2 xl:grid-cols-4">
                @foreach ($products as $product)
                    <a data-product-name="{{ Str::slug($product->name, '_') }} {{ Str::slug($product->type, '_') }}"
                        href="{{ route('learn-more', ['name' => $product->name]) }}"
                        class="mix-target product-category-{{ Str::slug($product->type, '_') }} space-y-2">
                        <div class="p-4 bg-gray-200 rounded-lg">
                            <div class="w-full h-72 bg-contain bg-center bg-no-repeat"
                                style="background-image: url('{{ asset('/img/products/' . $product->slug . '_' . $product->images[0]) }}')">
                            </div>
                        </div>
                        <p class="text-lg font-bold text-center">{{ $product->name }}</p>
                    </a>
                @endforeach
                <div class="hidden no-product-data bottom-0 space-y-2 bg-gray-200 w-full rounded-lg py-3">
                    <svg class="w-10 h-10 text-hot-800 block mx-auto" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M18 17h-.09c.058-.33.088-.665.09-1v-1h1a1 1 0 0 0 0-2h-1.09a5.97 5.97 0 0 0-.26-1H17a2 2 0 0 0 2-2V8a1 1 0 1 0-2 0v2h-.54a6.239 6.239 0 0 0-.46-.46V8a3.963 3.963 0 0 0-.986-2.6l.693-.693A1 1 0 0 0 16 4V3a1 1 0 1 0-2 0v.586l-.661.661a3.753 3.753 0 0 0-2.678 0L10 3.586V3a1 1 0 1 0-2 0v1a1 1 0 0 0 .293.707l.693.693A3.963 3.963 0 0 0 8 8v1.54a6.239 6.239 0 0 0-.46.46H7V8a1 1 0 0 0-2 0v2a2 2 0 0 0 2 2h-.65a5.97 5.97 0 0 0-.26 1H5a1 1 0 0 0 0 2h1v1a6 6 0 0 0 .09 1H6a2 2 0 0 0-2 2v2a1 1 0 1 0 2 0v-2h.812A6.012 6.012 0 0 0 11 21.907V12a1 1 0 0 1 2 0v9.907A6.011 6.011 0 0 0 17.188 19H18v2a1 1 0 0 0 2 0v-2a2 2 0 0 0-2-2Zm-4-8.65a5.922 5.922 0 0 0-.941-.251l-.111-.017a5.52 5.52 0 0 0-1.9 0l-.111.017A5.925 5.925 0 0 0 10 8.35V8a2 2 0 1 1 4 0v.35Z" />
                    </svg>
                    <p>Oops! No product found.</p>
                </div>
            </div>
            <div class="mixitup-page-list"></div>
            {{-- <div class="mixitup-page-stats"></div> --}}

        </div>

        {{-- Offer --}}
        <x-frontend.offer />
    </section>
</x-layout>

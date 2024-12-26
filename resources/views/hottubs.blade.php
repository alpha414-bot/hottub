<x-layout>
    <x-slot:title>
        Hot Tubs
    </x-slot>

    <x-slot:meta>
        <meta name="description"
            content="Explore our range of luxurious hot tubs. Perfect for relaxation and rejuvenation.">
        <meta name="keywords" content="hot tubs, luxury hot tubs, relaxation, spa, wellness">
        <meta property="og:title" content="Hot Tubs">
        <meta property="og:description"
            content="Explore our range of luxurious hot tubs. Perfect for relaxation and rejuvenation.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/hottub.jpg') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Hot Tubs">
        <meta name="twitter:description"
            content="Explore our range of luxurious hot tubs. Perfect for relaxation and rejuvenation.">
        <meta name="twitter:image" content="{{ asset('images/hottub.jpg') }}">
    </x-slot>

    {{-- Quick Intro --}}
    <x-frontend.intro />
    <section class="pt-16 px-4 sm:px-12 xl:px-32">
        <div class="grid grid-cols-1 gap-20 justify-evenly xl:grid-cols-2">
            <div class="">
                <div class="space-y-3">
                    <h4 class="text-5xl text-center">Full Powered Hot Tubs</h4>
                    <p class="text-xl text-center">Experience true maximum hydrotherapy</p>
                </div>
                <div class="mt-8 space-y-7">
                    @foreach ($fully_powered as $product)
                        <a href="{{ route('learn-more', ['name' => $product->name]) }}"
                            class="flex flex-row items-start gap-4 md:gap-6">
                            <img src="{{ asset('/img/products/' . $product->slug . '/' . $product->images[0]) }}"
                                alt="The {{ Str::ucfirst($product->slug) }} Image" class="max-w-32 md:max-w-64">
                            <div>
                                <div class="flex items-center gap-2">
                                    @if ($product->new)
                                        <span class="text-2xl text-red-500">NEW!</span>
                                    @endif
                                    <p class="text-2xl font-medium">{{ $product->name }}</p>
                                </div>
                                <p class="text-sm font-mono font-normal">
                                    {{ $product->measurement }} for up to
                                    {{ Str::replace('Seats', 'People', Str::replace(' + 1 Lounger', '', $product->specifications['features']['Seating Configuration'])) }}
                                </p>
                                <p class="text-lg text-gray-800">{{ $product->short_description }}</p>
                                <div class="cursor-pointer inline-block mx-auto learn-more-btn mt-2">Learn More</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="space-y-20">
                <div>
                    <div class="space-y-3">
                        <h4 class="text-5xl text-center">Plug-and-Play Hot Tubs</h4>
                        <p class="text-xl text-center">Plug it in and splash into serenity.</p>
                    </div>
                    <div class="mt-8 space-y-7">
                        @foreach ($plug_and_play as $product)
                            <a href="{{ route('learn-more', ['name' => $product->name]) }}"
                                class="flex flex-row items-start gap-4 md:gap-6">
                                <img src="{{ asset('/img/products/' . $product->slug . '/' . $product->images[0]) }}"
                                    alt="The {{ Str::ucfirst($product->slug) }} Image" class="max-w-32 md:max-w-64">
                                <div>
                                    <div class="flex items-center gap-2">
                                        @if ($product->new)
                                            <span class="text-2xl text-red-500">NEW!</span>
                                        @endif
                                        <p class="text-2xl font-medium">{{ $product->name }}</p>
                                    </div>
                                    <p class="text-sm font-mono font-normal">
                                        {{ $product->measurement }} for up to
                                        {{ Str::replace('Seats', 'People', Str::replace(' + 1 Lounger', '', $product->specifications['features']['Seating Configuration'])) }}
                                    </p>
                                    <p class="text-lg text-gray-800">{{ $product->short_description }}</p>
                                    <div class="cursor-pointer inline-block mx-auto learn-more-btn mt-2">Learn More</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div>
                    <div class="space-y-3">
                        <h4 class="text-5xl text-center">New! Cold Spas</h4>
                        <p class="text-xl text-center text-hot-700">Chill out effortlessly in our new cold spas!</p>
                    </div>
                    <div class="mt-8 space-y-7">
                        @foreach ($cold_spas as $product)
                            <a href="{{ route('learn-more', ['name' => $product->name]) }}"
                                class="flex flex-row items-start gap-4 md:gap-6">
                                <img src="{{ asset('/img/products/' . $product->slug . '/' . $product->images[0]) }}"
                                    alt="The {{ Str::ucfirst($product->slug) }} Image" class="max-w-32 md:max-w-64">
                                <div>
                                    <div class="flex items-center gap-2">
                                        @if ($product->new)
                                            <span class="text-2xl text-red-500">NEW!</span>
                                        @endif
                                        <p class="text-2xl font-medium">{{ $product->name }}</p>
                                    </div>
                                    <p class="text-sm font-mono font-normal">
                                        {{ $product->measurement }} for up to
                                        {{ Str::replace('Seats', 'People', Str::replace(' + 1 Lounger', '', $product->specifications['features']['Seating Configuration'])) }}
                                    </p>
                                    <p class="text-lg text-gray-800">{{ $product->short_description }}</p>
                                    <div class="cursor-pointer inline-block mx-auto learn-more-btn mt-2">Learn More</div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- Offer --}}
        <x-frontend.offer />
    </section>
</x-layout>

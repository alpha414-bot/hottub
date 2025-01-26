<x-layout>
    <x-slot:title>
        Earth Spas
    </x-slot>

    <x-slot:meta>
        <meta name="description"
            content="Explore our range of luxurious hot tubs. Perfect for relaxation and rejuvenation.">
        <meta name="keywords" content="hot tubs, luxury hot tubs, relaxation, spa, wellness, generation">
        <meta property="og:title" content="Generation Hottubs">
        <meta property="og:description"
            content="Explore our range of luxurious hot tubs. Perfect for relaxation and rejuvenation.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/hottub.jpg') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Earth Spas">
        <meta name="twitter:description"
            content="Explore our range of luxurious hot tubs. Perfect for relaxation and rejuvenation.">
        <meta name="twitter:image" content="{{ asset('images/hottub.jpg') }}">
    </x-slot>

    {{-- Quick Intro --}}
    <x-frontend.intro />
    <section class="pt-16 px-4 space-y-5 sm:px-12 xl:px-32">
        <div class="space-y-3">
            <h4 class="text-5xl text-center">Generation Hot Tubs</h4>
            <p class="text-xl text-center">Discover a stunning range of hot tubs</p>
        </div>
        <div class="grid grid-cols-1 gap-12 justify-evenly xl:grid-cols-2">
            @foreach ($products as $product)
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
                            {{ $product->measurement }}
                        </p>
                        <p class="text-sm font-mono font-normal">
                            {{ $product->long_caption }}
                        </p>
                        <p class="text-lg text-gray-800">{{ $product->short_description }}</p>
                        <div class="cursor-pointer inline-block mx-auto learn-more-btn mt-2">Learn More</div>
                    </div>
                </a>
            @endforeach
        </div>
        {{-- Offer --}}
        <x-frontend.offer />
    </section>
</x-layout>

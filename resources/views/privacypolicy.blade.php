@php
    use Illuminate\Support\Str;
@endphp
<x-layout>
    <x-slot:title>
        Privacy Policy
    </x-slot>
    <x-slot:meta>
        <meta name="description"
            content="Read our privacy policy to understand how we handle your personal information and data.">
        <meta name="keywords" content="privacy policy, data protection, personal information, data security">
        <meta property="og:title" content="Privacy Policy">
        <meta property="og:description"
            content="Read our privacy policy to understand how we handle your personal information and data.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/privacypolicy.jpg') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Privacy Policy">
        <meta name="twitter:description"
            content="Read our privacy policy to understand how we handle your personal information and data.">
        <meta name="twitter:image" content="{{ asset('images/privacypolicy.jpg') }}">
    </x-slot:meta>
    <main class="py-8 px-4 sm:px-8 xl:px-24">
        <div class="space-y-2" data-accordion="collapse" data-active-classes="font-medium rounded-t-lg border-b-0"
            data-inactive-classes="rounded-lg">
            @foreach ($policies as $key => $policy)
                @php
                    $slug = Str::lower(Str::slug($key));
                @endphp
                <div>
                    <h2 id="{{ $slug }}-heading">
                        <button type="button"
                            class="flex items-center justify-between w-full px-5 py-2 text-hot-700 hover:text-gray-800 bg-gray-100 border border-gray-300 focus:ring-0 focus:outline-none gap-3"
                            data-accordion-target="#{{ $slug }}-body" aria-expanded="true"
                            aria-controls="{{ $slug }}-body">
                            <span class="text-left">{{ $key }}</span>
                            <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M9 5 5 1 1 5" />
                            </svg>
                        </button>
                    </h2>
                    <div id="{{ $slug }}-body" class="hidden" aria-labelledby="{{ $slug }}-heading">
                        <div class="px-5 border border-gray-300 text-gray-900 rich-editor">
                            <p class="mb-2 space-y-3" markdown="1">
                                <pre class="whitespace-pre-wrap font-sans"> {!! Str::markdown($policy) !!}</pre>
                            </p>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </main>

</x-layout>

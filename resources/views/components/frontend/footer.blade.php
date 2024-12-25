{{--  --}}
@php
    $footer_links = [
        ['text' => 'Hot Tubs', 'link' => route('hot-tubs')],
        ['text' => 'shop', 'link' => route('hot-tubs')],
        ['text' => 'Why Choose Us?', 'link' => route('about-us')],
        ['text' => 'Contact Us', 'link' => route('contact-us')],
        ['text' => 'Privacy Policy', 'link' => route('privacy-policy')],
    ];
@endphp
<section class=" py-8 px-4 bg-hot-950 text-white grid lg:grid-cols-3 gap-y-6 items-stretch lg:px-24">
    <div class="flex flex-col items-center justify-center">
        <img src="{{ $white_logo }}" alt="{{ $appname }} Logo" class="min-w-52 max-w-[72%]">
    </div>
    <div class="flex flex-col items-center space-y-8 py-8 lg:py-2">
        <div class="flex items-center gap-x-4">
            <span class="text-xl font-medium">Follow us:</span>
            <div class="space-x-0.5">
                <a href="{{ $facebook_link }}" class="bg-white p-3 inline-block rounded-full group">
                    <x-feathericon-facebook class="text-[#3B5999] w-5 h-5 group-hover:border-b-2 border-[#3B5999]" />
                </a>
                <a href="{{ $linkedin_link }}" class="bg-white p-3 inline-block rounded-full group">
                    <x-feathericon-linkedin class="text-[#0077B5] w-5 h-5 group-hover:border-b-2 border-[#0077B5]" />
                </a>
                <a href="{{ $instagram_link }}" class="bg-white p-3 inline-block rounded-full group">
                    <x-feathericon-instagram class="text-[#D1347A] w-5 h-5 group-hover:border-b-2 border-[#D1347A]" />
                </a>
            </div>
        </div>
        <div>
            <ul class="flex flex-row items-center flex-wrap justify-center gap-x-2">
                @foreach ($footer_links as $key => $item)
                    <li><a href="{{ $item['link'] }}"
                            class="hover:underline hover:underline-offset-2 decoration-white">{{ Str::ucfirst($item['text']) }}</a>
                    </li>
                    @if ($key + 1 !== count($footer_links))
                        <li class="w-1.5 h-1.5 bg-white rounded-full"></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="flex flex-col items-center">
            <a href="{{ $map_address }}" target="_blank"
                class="hover:underline hover:underline-offset-2 decoration-white">{{ $address }}</a>
            <ul class="flex flex-col items-center gap-x-2 gap-y-0.5 xl:flex-row">
                <li>
                    <a href="tel:{{ $telephone }}"
                        class="hover:underline hover:underline-offset-2 decoration-white">{{ $telephone }}</a>
                </li>
                <li class="hidden w-1.5 h-1.5 bg-white rounded-full xl:block"></li>
                <li>
                    <a href="mailto:{{ $mail }}"
                        class="hover:underline hover:underline-offset-2 decoration-white">{{ $mail }}</a>
                </li>
            </ul>
        </div>
        <x-frontend.cards />
    </div>
    <div class="flex flex-col items-center py-6 gap-4">
        <img src="{{ asset('/img/alliance/pool_hottub.jpg') }}" alt="Pool & Hot Tub Alliance MEMBER" class="max-w-64 md:max-w-56">
        <img src="{{ asset('/img/alliance/accredited_business.svg') }}" alt="Pool & Hot Tub Alliance MEMBER"
            class="max-w-44 md:max-w-32">
        <img src="{{ asset('/img/alliance/affirm_logo.png') }}" alt="Pool & Hot Tub Alliance MEMBER" class="max-w-32 md:max-w-20">
    </div>
</section>

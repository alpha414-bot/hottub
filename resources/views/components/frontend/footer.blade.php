{{--  --}}
<?php
$footer_links = [['text' => 'Hot Tubs', 'link' => 'hot-tubs'], ['text' => 'shop', 'link' => 'shop'], ['text' => 'Why Choose Us?', 'link' => 'about'], ['text' => 'Contact Us', 'link' => 'contactus'], ['text' => 'Privacy Policy', 'link' => 'privacy']];
?>
{{-- <section class=" py-8 px-24 bg-hot-950 text-white flex flex-row justify-evenly items-center"> --}}
<section class=" py-8 px-24 bg-hot-950 text-white grid grid-cols-3 items-stretch">
    <div class="flex flex-col items-center justify-center">
        <img src="{{ $logo }}" alt="{{ $name }} Logo" class="min-w-64">
    </div>
    <div class="flex flex-col items-center space-y-8">
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
                    <li><a href="/{{ $item['link'] }}"
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
            <ul class="flex flex-row items-center gap-x-2">
                <li>
                    <a href="tel:{{ $telephone }}"
                        class="hover:underline hover:underline-offset-2 decoration-white">{{ $telephone }}</a>
                </li>
                <li class="w-1.5 h-1.5 bg-white rounded-full"></li>
                <li>
                    <a href="mailto:{{ $mail }}"
                        class="hover:underline hover:underline-offset-2 decoration-white">{{ $mail }}</a>
                </li>
            </ul>
        </div>
        <div class="">
            <span><i class="fa-2x fa-brands fa-cc-visa"></i></span>
            <span><i class="fa-2x fa-brands fa-cc-mastercard"></i></span>
            <span><i class="fa-2x fa-brands fa-cc-discover"></i></span>
            <span><i class="fa-2x fa-brands fa-cc-amex"></i></span>
            <span><i class="fa-2x fa-brands fa-cc-jcb"></i></span>
            <span><i class="fa-2x fa-brands fa-cc-diners-club"></i></span>
            <span><i class="fa-2x fa-brands fa-cc-paypal"></i></span>
            <span><i class="fa-2x fa-brands fa-cc-stripe"></i></span>
            <span><i class="fa-2x fa-brands fa-google"></i></span>
            <span><i class="fa-2x fa-brands fa-apple"></i></span>
        </div>
    </div>
    <div class="flex flex-col items-center py-6 gap-4">
        <img src="https://www.dothanhottubs.com/web/image/8268-c48fb60a/PHTA-19-Member-Logo-3C-Rev-RGB.webp"
            alt="Pool & Hot Tub Alliance MEMBER" class="max-w-56">
        <img src="https://www.dothanhottubs.com/web/image/8573-5da29fc2/AB-seal-horz.svg.svg"
            alt="Pool & Hot Tub Alliance MEMBER" class="max-w-32">
        <img src="https://www.dothanhottubs.com/web/image/9575-c0c58071/white_logo-transparent_bg.png"
            alt="Pool & Hot Tub Alliance MEMBER" class="max-w-20">
    </div>
</section>

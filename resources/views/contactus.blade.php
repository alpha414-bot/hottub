<x-layout>
    <x-slot:title>
        Contact Us
    </x-slot>
    <x-slot:meta>
        <meta name="description" content="Contact us for any inquiries related to our company or services.">
        <meta name="keywords" content="contact, inquiries, services, company">
        <meta property="og:title" content="Contact Us">
        <meta property="og:description" content="Contact us for any inquiries related to our company or services.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/contactus.jpg') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Contact Us">
        <meta name="twitter:description" content="Contact us for any inquiries related to our company or services.">
        <meta name="twitter:image" content="{{ asset('images/contactus.jpg') }}">
    </x-slot:meta>
    {{-- Intro --}}
    <div class="h-40 flex items-center justify-center px-2 xl:px-28 bg-cover bg-center bg-no-repeat relative bg-fixed md:h-60"
        style="background-image: url('/img/contactus.jpg')">
        <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-white/45 to-white/40"></div>
        <h3 class="text-5xl font-bold relative z-10">Contact Us</h3>
    </div>
    <form method="POST" action="{{ route('submit-contact-us') }}"
        class="px-4 py-10 md:px-14 md:py-24 xl:px-24 grid md:grid-cols-[2fr_1fr] gap-x-8 gap-y-9">
        @csrf
        <div>
            <p>Contact us about anything related to our company or services.</p>
            <p>We'll do our best to get back to you as soon as possible</p>
            <div class="py-3">
                @if ($errors->any())
                    <div
                        class="bg-red-300 text-red-800 border border-red-600 text-sm font-medium px-2 py-2 rounded-lg shadow">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div
                        class="bg-emerald-300 text-emerald-800 border border-emerald-600 text-sm font-medium px-2 py-2 rounded-lg shadow">
                        {{ session('success') }}
                    </div>
                @endif

            </div>
            <div class="mt-6 space-y-3">
                <div class="grid md:grid-cols-[1fr_3fr] gap-x-4 gap-y-1">
                    <label for="subject">Subject*</label>
                    <input id="subject" name="subject" class="form-input" require />
                </div>
                <div class="grid md:grid-cols-[1fr_3fr] gap-x-4 gap-y-1">
                    <label for="name">Your Name*</label>
                    <input id="name" name="name" class="form-input" require />
                </div>
                <div class="grid md:grid-cols-[1fr_3fr] gap-x-4 gap-y-1">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" class="form-input" value="{{ $countrycode }}" />
                </div>
                <div class="grid md:grid-cols-[1fr_3fr] gap-x-4 gap-y-1">
                    <label for="email">Your Email*</label>
                    <input id="email" name="email" class="form-input" require />
                </div>
                <div class="grid md:grid-cols-[1fr_3fr] gap-x-4 gap-y-1">
                    <label for="question">Your Question*</label>
                    <div class="space-y-7">
                        <textarea name="question" id="question" cols="30" rows="3" require class="form-input"></textarea>
                        <button type="submit"
                            class="bg-hot-700 text-white px-6 py-2 text-lg rounded-3xl hover:bg-hot-800">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-1">
            <p class="text-base">{{ $appname }} Outdoor Living</p>
            <p class="flex items-center gap-3"><x-feathericon-phone class="w-5 h-5" /><span>{{ $telephone }}</span>
            </p>
            <p class="flex items-center gap-3"><x-feathericon-mail class="w-5 h-5" /><span>{{ $mail }}</span>
            </p>
        </div>
    </form>
    <div class="bg-hot-600 py-8 px-4 space-y-3">
        <h6 class="text-5xl font-bold text-center">Don't wait. Call now!</h6>
        <p class="text-4xl text-center">Call us now @ <strong>{{ $telephone }}</strong></p>
    </div>
</x-layout>

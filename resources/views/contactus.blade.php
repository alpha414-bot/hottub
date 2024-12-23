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
    <div class="h-60 flex items-center px-28 bg-cover bg-center bg-no-repeat relative bg-fixed"
        style="background-image: url('/img/contactus.jpg')">
        <div class="absolute inset-0 pointer-events-none bg-gradient-to-r from-white/45 to-white/40"></div>
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
        <h3 class="text-5xl font-bold relative z-10">Contact Us</h3>
    </div>
    <form class="py-24 px-24 grid grid-cols-[2fr_1fr] gap-x-8">
        <div>
            <p>Contact us about anything related to our company or services.</p>
            <p>We'll do our best to get back to you as soon as possible</p>
            <div class="mt-6 space-y-3">
                <div class="grid grid-cols-[1fr_3fr] gap-4">
                    <label for="subject">Subject*</label>
                    <input id="subject" name="subject" class="form-input" required />
                </div>
                <div class="grid grid-cols-[1fr_3fr] gap-4">
                    <label for="name">Your Name*</label>
                    <input id="name" name="name" class="form-input" required />
                </div>
                <div class="grid grid-cols-[1fr_3fr] gap-4">
                    <label for="phone">Phone</label>
                    <input id="phone" name="phone" class="form-input" value={{ $countrycode }} />
                </div>
                <div class="grid grid-cols-[1fr_3fr] gap-4">
                    <label for="email">Your Email*</label>
                    <input id="email" name="email" class="form-input" required />
                </div>
                <div class="grid grid-cols-[1fr_3fr] gap-4">
                    <label for="question">Your Question*</label>
                    <div class="space-y-7">
                        <textarea name="question" id="question" cols="30" rows="3" required class="form-input"></textarea>
                        <button type="submit"
                            class="bg-hot-700 text-white px-6 py-2 text-lg rounded-3xl hover:bg-hot-800">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-y-1">
            <p class="text-base">{{ $name }} Warehouse</p>
            <p class="flex items-center gap-3"><x-feathericon-phone class="w-5 h-5" /><span>{{ $telephone }}</span>
            </p>
            <p class="flex items-center gap-3"><x-feathericon-mail class="w-5 h-5" /><span>{{ $mail }}</span>
            </p>
        </div>
    </form>
    <div class="bg-hot-600 py-8 space-y-3">
        <h6 class="text-5xl font-bold text-center">Don't wait. Call now!</h6>
        <p class="text-4xl text-center">Call us now @ <strong>{{ $telephone }}</strong></p>
    </div>
</x-layout>

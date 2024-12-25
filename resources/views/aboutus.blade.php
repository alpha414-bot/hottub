<x-layout>
    <x-slot:title>
        About Us
    </x-slot>
    <x-slot:meta>
        <meta name="description" content="Learn more about our company, our mission, and our team.">
        <meta name="keywords" content="about us, company, mission, team">
        <meta property="og:title" content="About Us">
        <meta property="og:description" content="Learn more about our company, our mission, and our team.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="{{ asset('images/aboutus.jpg') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="About Us">
        <meta name="twitter:description" content="Learn more about our company, our mission, and our team.">
        <meta name="twitter:image" content="{{ asset('images/aboutus.jpg') }}">
    </x-slot:meta>
    <main class="px-4 py-12 xl:px-24 xl:py-24 space-y-24">
        <h1 class="text-5xl font-bold text-center">Why Choose {{ $appname }} Warehouse?</h1>
        <div class="grid xl:grid-cols-[1.2fr_1fr] gap-12">
            <div class="space-y-6 text-lg">
                <div class="space-y-2">
                    <h3 class="text-5xl font-bold">Local Roots, Local Service</h3>
                    <p class="font- font-sans">Being a local company means we understand the unique needs of our
                        community.
                        With our roots firmly
                        planted in Dothan, we are dedicated to providing personalized service to our neighbors, making
                        luxury accessible and affordable for <span class="italic">everyone.</span></p>
                </div>
                <div class="space-y-2">
                    <h3 class="text-5xl font-bold">Customer-Centric Approach</h3>
                    <p class="font- font-sans">Customer satisfaction is our top priority. We obsess over providing
                        exceptional service and staying focused on what truly matters - you. From the moment you explore
                        our selection to long after your hot tub is in place, we're here to assist and ensure your
                        complete satisfaction.
                        <br /></br />
                        Choosing Dothan Hot Tub Warehouse is simple. It means choosing a local partner dedicated to
                        delivering more than just hot tubs - we deliver an unmatched experience.
                    </p>
                    <p>
                        <strong>Explore our range, discover the difference, and elevate your relaxation.</strong>
                    </p>
                    <p>
                        Ready to take the plunge? <a href="{{ route('contact-us') }}"
                            class="text-hot-700 font-medium italic underline-offset-2 hover:underline hover:text-hot-900">Contact
                            us
                            today</a> to find the
                        perfect hot tub for your lifestyle.
                    </p>
                    <img src="{{ asset('/img/seal.png') }}" alt="{{ $appname }} Seals Image" class="object-cover">
                </div>
            </div>
            <div class="order-first xl:order-last">
                <img src="{{asset('/img/aboutus.jpg')}}"
                    alt="About Us Image" class="w-full object-cover animate-slidedown">
            </div>
        </div>
    </main>
</x-layout>

<x-layout notemplate="remove_me">
    @slot('title')
        New Message
    @endslot
    <main class="space-y-8">
        <div class="bg-hot-700/20 w-full py-7 flex items-center justify-center">
            <img src="{{ $logo }}" alt="{{ $appname }} Warehouse logo" class="max-w-52">
        </div>
        <div class="space-y-2">
            <h2 class="text-4xl font-bold text-center">New Contact</h2>
            <p class="text-xl text-center font-medium text-gray-700">Below is the metadata information of the user that
                reached out on
                <span
                    class="underline underline-offset-2 decoration-dotted text-hot-700 font-semibold">{{ \Carbon\Carbon::now()->format('jS F Y h:ia') }}.</span>
            </p>
        </div>
        <div class="px-2 md:px-16 text-lg space-y-3">
            <h2 class="text-2xl font-bold underline underline-offset-2 decoration-dotted">Request Information</h2>
            <div class="flex gap-6 md:gap-12">
                <p class="font-bold tracking-wider">Name:</p>
                <p class="bg-hot-700/85 text-white font-medium px-4 py-1 rounded-md">{{ $name }}</p>
            </div>
            <div class="flex gap-6 md:gap-12">
                <p class="font-bold tracking-wider">Subject:</p>
                <p class="bg-hot-700/85 text-white font-medium px-4 py-1 rounded-md">{{ $subject }}</p>
            </div>
            <div class="flex gap-6 md:gap-12">
                <p class="font-bold tracking-wider">Message Request:</p>
                <p class="bg-hot-700/85 text-white font-medium px-4 py-1 rounded-md">{{ $question }}</p>
            </div>

            <h2 class="text-2xl font-bold underline underline-offset-2 decoration-dotted">Contact Information</h2>
            <div class="flex gap-6 md:gap-12">
                <p class="font-bold tracking-wider">Phone:</p>
                <a href="tel:{{ $phone }}"
                    class="bg-hot-700/85 text-white underline underline-offset-2 font-medium px-4 py-1 rounded-md hover:text-gray-700">{{ $phone }}</a>
            </div>
            <div class="flex gap-6 md:gap-12">
                <p class="font-bold tracking-wider">Email:</p>
                <a href="mailto:{{ $email }}"
                    class="bg-hot-700/85 text-white underline underline-offset-2 font-medium px-4 py-1 rounded-md hover:text-gray-700">{{ $email }}</a>
            </div>
        </div>
    </main>
    <div class="mt-12 bg-hot-700/20 py-6 px-8 md:px-16 text-gray-800 font-medium">
        <p class="text-lg">Thank you,</p>
        <p class="text-lg">Message from {{ $appname }} Mailing System.</p>
    </div>
</x-layout>

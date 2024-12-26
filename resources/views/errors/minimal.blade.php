<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css'])
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-50 sm:items-center sm:pt-0">
        <div class="max-w-xl mx-auto flex flex-col items-center justify-center  sm:px-6 lg:px-8">
            <div class="flex items-center pt-8 font-medium sm:justify-start sm:pt-0 mb-6">
                <div class="px-4 text-2xl text-gray-500 border-r border-gray-400 tracking-wider">
                    @yield('code')
                </div>

                <div class="ml-4 text-2xl text-gray-500 uppercase tracking-wider">
                    @yield('message')
                </div>
            </div>
            <a href="{{ route('home') }}" class="inline-block mx-auto bg-hot-700 text-white font-medium rounded-md px-4 py-1.5">Go to Home</a>
        </div>
    </div>
</body>

</html>

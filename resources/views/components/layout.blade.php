<!DOCTYPE html>
<html lang="en" x-data="{ nav: false }">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @isset($title)
        <title>{{ $title }} - {{ $appname }}</title>
    @endisset
    {{-- Meta --}}
    @isset($meta)
        {{ $meta }}
    @endisset
    {{-- Icon --}}
    <link type="image/x-icon" rel="shortcut icon" href="{{ asset('/img/favicon/apple-icon-114x114.png') }}" />
    <link href={{ asset('/img/favicon/apple-icon-57x57.png') }} rel="apple-touch-icon" sizes="57x57" />
    <link href={{ asset('/img/favicon/apple-icon-60x60.png') }} rel="apple-touch-icon" sizes="60x60" />
    <link href={{ asset('/img/favicon/apple-icon-72x72.png') }} rel="apple-touch-icon" sizes="72x72" />
    <link href={{ asset('/img/favicon/apple-icon-76x76.png') }} rel="apple-touch-icon" sizes="76x76" />
    <link href={{ asset('/img/favicon/apple-icon-114x114.png') }} rel="apple-touch-icon" sizes="114x114" />
    <link href={{ asset('/img/favicon/apple-icon-120x120.png') }} rel="apple-touch-icon" sizes="120x120" />
    <link href={{ asset('/img/favicon/apple-icon-144x144.png') }} rel="apple-touch-icon" sizes="144x144" />
    <link href={{ asset('/img/favicon/apple-icon-152x152.png') }} rel="apple-touch-icon" sizes="152x152" />
    <link href={{ asset('/img/favicon/apple-icon-180x180.png') }} rel="apple-touch-icon" sizes="180x180" />
    <link href={{ asset('/img/favicon/android-icon-192x192.png') }} rel="icon" sizes="192x192" type="image/png" />
    <link href={{ asset('/img/favicon/favicon-32x32.png') }} rel="icon" sizes="32x32" type="image/png" />
    <link href={{ asset('/img/favicon/favicon-96x96.png') }} rel="icon" sizes="96x96" type="image/png" />
    <link href={{ asset('/img/favicon/favicon-16x16.png') }} rel="icon" sizes="16x16" type="image/png" />
    <link href={{ asset('/img/favicon/manifest.json') }} rel="manifest" />
    <meta content={{ asset('/img/favicon/ms-icon-144x144.png') }} name="msapplication-TileImage" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/brands.min.css"
        integrity="sha512-58P9Hy7II0YeXLv+iFiLCv1rtLW47xmiRpC1oFafeKNShp8V5bKV/ciVtYqbk2YfxXQMt58DjNfkXFOn62xE+g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom Styles-->
    @isset($headccss)
        {{ $headcss }}
    @endisset
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.tsx'])
</head>

<body class="font-sans antialiased relative p-0 m-0">
    @if (!isset($notemplate))
        {{-- Navbar --}}
        <x-frontend.navbar />
    @endif
    <main>
        {{ $slot }}
    </main>
    @if (!isset($notemplate))
        {{-- Footer --}}
        <x-frontend.footer />
    @endif
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @isset($headjs)
        {{ $headjs }}
    @endisset
    <script src="{{ asset('packages/fslightbox/fslightbox.js') }}"></script>
</body>

</html>

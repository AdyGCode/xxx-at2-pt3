<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- FavIcon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/saas-icon.svg') }}" sizes="any">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="antialiased">
<div class="relative flex items-top justify-center min-h-screen bg-zinc-100 dark:bg-zinc-900 sm:items-center sm:pt-0">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
            <a href="{{ route('home') }}">
                <x-application-logo class="block h-24 w-auto fill-current -ml-36 mr-12 "/>
            </a>

            <div class="px-4 text-xl text-zinc-700 dark:text-zinc-300 border-r border-r-2 border-sky-600 tracking-wider py-4">
                @yield('code')
            </div>

            <div class="ml-4 text-xl font-bold text-zinc-800 dark:text-zinc-400 uppercase tracking-wider py-4">
                @yield('message')
                <br>
                <a href="{{ route('home') }}" class="text-sky-800 dark:text-sky-500 text-sm">
                    Let's head home...
                </a>
            </div>
        </div>

    </div>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="font-sans antialiased min-h-screen bg-gray-100 flex flex-col">
{{--<div class="min-h-screen bg-gray-100 flex flex-col">--}}
@include('layouts.navigation')

<!-- Page Heading -->
<header class="bg-zinc-100 shadow pt-16 ">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        {{ $header }}
    </div>
</header>

<!-- Page Content -->
    <main class="flex-grow">

        @if ($message = Session::get('success'))
            <div class="mt-12 mb-4">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div
                        class="bg-green-800 text-white overflow-hidden
                               shadow-sm sm:rounded-lg rounded border-2 border-solid p-2 my-2 ">
                        <p class="flex-1">
                            <i class="fas fa-smile mr-6 pl-2"></i>
                            <span class="align-middle">
                                {{ $message }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        @endif

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer')

{{--</div>--}}
</body>
</html>

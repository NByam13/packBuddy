<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pack Buddy</title>
    <link rel="icon" href="{{asset('favicon.ico')}}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body>
<div class="mx-8">
    <div class="border-b-2">
        <h1 class="text-2xl py-4">🏕 Pack Buddy</h1>

        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                    <a href="{{ url('/dashboard') }}"
                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                       class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                           class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <nav class="w-1/4 pt-4 mx-auto">
        <div class="flex justify-between">
            <a class="text-lg" href="{{ route('packs.index', [Auth::user()]) }}">Packs</a>
            <a class="text-lg" href="{{ route('trips.index', [Auth::user()]) }}">Trips</a>
            <a class="text-lg" href="{{ route('items.index', [Auth::user()]) }}">Items</a>
            <a class="text-lg">Friends</a>
        </div>
    </nav>
    <div class="w-5/6 mx-auto mt-4 p-8 border border-gray-200 rounded-2xl bg-green-50">
        {{ $slot }}
    </div>
</div>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ Vite::asset('resources/images/logo.svg') }}" type="image/svg+xml">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Cash Cow</title>
</head>
<body>
<header>
    <nav class="flex flex-row justify-between p-2 bg-white container mx-auto">
        <div class="flex flex-row gap-2 md:gap-10">
            @auth
                <a href='/dashboard'>
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Cash Cow Logo"
                         class="w-16 drop-shadow">
                </a>
            @endauth
            @guest
                <a href='/'>
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Cash Cow Logo"
                         class="w-16 drop-shadow">
                </a>
            @endguest

            @auth
                <div class="flex flex-row my-auto gap-2 md:gap-6">
                    <x-nav-link href="#" :active="request()->is('/history')">History</x-nav-link>
                </div>
            @endauth
        </div>
        <div class="flex flex-row gap-2 md:gap-6 my-auto">
            @guest
                <x-nav-link href="/login" :button="true">Log In</x-nav-link>
                <x-nav-link href="/register" :button="true">Register</x-nav-link>
            @endguest
            @auth
                <x-nav-link href="/profile" :button="true">Profile</x-nav-link>
                <form action="/logout" method="post">
                    @csrf
                    <button
                        class="border-b-2 hover:border-eggplant-900 border-b-transparent transition duration-200 font-medium bg-eggplant-950 hover:bg-eggplant-800 text-white px-3 py-1 rounded-lg border-none">
                        Log Out
                    </button>
                </form>
            @endauth
        </div>
    </nav>
</header>
<main>
    {{ $slot }}
</main>
</body>
</html>

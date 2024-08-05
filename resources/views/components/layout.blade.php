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
    <nav class="flex flex-row justify-between p-2 bg-egg container mx-auto">
        <div class="flex flex-row gap-10">
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Cash Cow Logo" class="w-16 drop-shadow">
            </a>

            <div class="flex flex-row my-auto gap-6">
                <x-nav-link href="#" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="#" :active="request()->is('/history')">History</x-nav-link>
            </div>
        </div>
        <div class="flex flex-row gap-6 my-auto">
            <x-nav-link href="/login" :button="true">Log In</x-nav-link>
            <x-nav-link href="/register" :button="true">Register</x-nav-link>
        </div>
    </nav>
</header>
<main>
    {{ $slot }}
</main>
</body>
</html>

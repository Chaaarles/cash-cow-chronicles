<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Cash Cow</title>
</head>
<body>
<header>
    <nav class="flex flex-row justify-between p-2 shadow ">
        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="Cash Cow Logo" class="w-20">
            </a>
        </div>
        <div>
            <a href="#">Example</a>
            <a href="#">Example</a>
            <a href="#">Example</a>
        </div>
        <div>
            <a href="#">Log In</a>
            <a href="#">Register</a>
        </div>
    </nav>
</header>
<main>
    {{ $slot }}
</main>
</body>
</html>

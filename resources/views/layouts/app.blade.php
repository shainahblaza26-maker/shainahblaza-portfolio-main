<!doctype html>
<html lang="en" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $profile['name'] }} — {{ $profile['role'] }}. Personal portfolio.">
    <title>{{ $profile['name'] }} — {{ $profile['role'] }}</title>

    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}" sizes="16x16 32x32">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

    <script>
        (function () {
            var stored = null;
            try {
                stored = localStorage.getItem('theme');
            } catch (e) {}
            var theme = stored || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="topbar" aria-label="Contact information">
        <div class="container topbar__inner">
            <span class="topbar__item">
                <x-icons.location />
                <span>{{ $contact['location'] }}</span>
            </span>
            <div class="topbar__links">
                <a class="topbar__item" href="{{ $contact['phone_url'] }}">
                    <x-icons.phone />
                    <span>{{ $contact['phone'] }}</span>
                </a>
                <a class="topbar__item topbar__item--hide-sm" href="{{ $contact['email_url'] }}">
                    <x-icons.envelope />
                    <span>{{ $contact['email'] }}</span>
                </a>
            </div>
        </div>
    </div>

    @include('partials.nav')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
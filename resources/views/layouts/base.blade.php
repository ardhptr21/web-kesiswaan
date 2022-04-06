<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="/images/logos/icon.png" type="image/x-icon">
    <title>{{ $title ?? 'Kesiswaan SMK N 7 Semarang' }}</title>
    @include('partials.styles')
</head>

<body>

    <header>
        @include('partials.navbar')
    </header>

    <main class="font-sans antialiased">
        @yield('content')
    </main>

    <footer>
        @include('partials.footer')
    </footer>

    @include('partials.scripts')
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/equiv_favicon.png') }}" type="image/x-icon">
    <title>{{ $title ?? 'Equivalence Titres' }}</title>
    @vite(['resources/css/app.css', 'resources/css/line.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="bg-slate-200 dark-bg-slate-700">
    @livewire('navbar-footer.titre')
    @livewire('navbar-footer.navbar')
    <main>
        {{ $slot }}
    </main>
    @livewire('navbar-footer.footer')
    @livewireScripts

</body>

</html>

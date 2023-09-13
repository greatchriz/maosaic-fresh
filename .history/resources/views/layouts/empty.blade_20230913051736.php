<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <link
        href="/dash/style.css"
        rel="stylesheet"
    >

    <link
        href="/dash/css/vendors/flatpickr.min.css"
        rel="stylesheet"
    >
    <link
        href="/dash/css/vendors/flatpickr.min.css"
        rel="stylesheet"
    >
    <link
        href="/dash/style.css"
        rel="stylesheet"
    >

    <!-- Styles -->
    @livewireStyles
    </head>
    <body class="font-inter antialiased bg-slate-100 text-slate-600">

        {{ $slot }}

        <script src="/dash/js/vendors/alpinejs.min.js" defer></script>
        <script src="/dash/js/vendors/chart.js"></script>
        <script src="/dash/js/vendors/moment.js"></script>
        <script src="/dash/js/vendors/chartjs-adapter-moment.js"></script>
        <script src="/dash/js/fintech-charts.js"></script>
        <script src="/dash/js/vendors/flatpickr.js"></script>
        <script src="/dash/js/flatpickr-init.js"></script>
        @livewireScripts
    </body>
</html>

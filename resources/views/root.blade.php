<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.4/datepicker.min.js"></script>
    <x-head.tinymce-config />
    <!-- Scripts -->
    @vite(['resources/js/app.js'])
    @spladeHead
</head>

<body class="font-sans antialiased bg-gray-50 dark:bg-gray-800 custom">
    @splade
    @stack('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        });
    </script>
</body>

</html>

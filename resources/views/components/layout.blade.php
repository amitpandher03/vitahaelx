<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VitaHealx</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-Navigation />

    
    <main>
        {{ $slot }}
    </main>
</body>
</html> 
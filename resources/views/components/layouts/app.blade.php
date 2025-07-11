<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livewire CRUD</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="bg-gray-100 text-gray-800 min-h-screen">
    <div class="containeer mx-auto px-4 py-6">
        {{ $slot }}
    </div>

    @livewireScripts
</body>
</html>

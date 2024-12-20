<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire portfolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @filepondScripts
</head>

<body class="flex min-h-screen flex-col bg-[#121212] ">
    <x-navbar />
    <div class="mt-24 container mx-auto py-4 px-12">
        {{ $slot }}
    </div>
</body>

</html>

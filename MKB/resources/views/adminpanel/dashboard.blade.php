<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body>
    <nav class="h-16 bg-[#343434]">
        <div class="container mx-auto h-full flex items-center">
            <p class="text-white font-bold text-2xl">Event CRUD</p>
        </div>
    </nav>
    
    <div>
        @livewire('post')
    </div>
    
    @livewireScripts
</body>
</html>
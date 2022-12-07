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
    <nav class="">
    </nav>
    <div class="container mx-auto]">
        @livewire('post')
    </div>
    <footer class="">
    </footer>

    @livewireScripts
</body>

</html>

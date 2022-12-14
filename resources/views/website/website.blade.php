<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link src="resources/css/card.css" rel="stylesheet">
    <title>IT-Price | Home</title>
</head>

<body>
    <div class="main-container">
        <x-header />
        <x-chards>
            @foreach ($posts as $rs)
                <x-card>
                    <x-slot name="title">
                        {{ $rs->title }}
                    </x-slot>
                    <x-slot name="price">
                        {{ $rs->price }}
                    </x-slot>
                    <x-slot name="description">
                        {{ $rs->description }}
                    </x-slot>
                </x-card>
            @endforeach
        </x-chards>
        <x-mail-form />
    </div>
    <x-footer />
</body>

</html>

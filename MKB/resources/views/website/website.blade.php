<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    @vite('resources/css/app.css')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        body {
            width: calc(100vw - (100vw - 100%));
        }

        .x-h-max {
            height: 100vh;
        }
    </style>
</head>

<body>
    <x-header />
    <x-chards />
</body>

</html>

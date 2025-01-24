<!DOCTYPE html>
<html lang="en" class="font-sans">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- @vite('resources/css/app.css') -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>
    {{ $slot }}

    @livewireScripts
    <script src="{{ mix('js/app.js') }}" ></script>
    <script src="{{ mix('js/bootstrap.js') }}"></script>
    
</body>
</html>
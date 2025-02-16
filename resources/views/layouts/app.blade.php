<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Boolando</title>
    <link rel="icon" href="{{ Vite::asset('resources/img/Logo.png') }}">

    @vite('resources/js/app.js')
</head>
<body>
    @include('shared.header')
    <main>
        <div class="container">
            <div class="row">
                @yield('main')
            </div>
        </div>
    </main>
    @include('shared.footer')

</body>
</html>
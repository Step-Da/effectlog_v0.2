<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="<?php echo csrf_token(); ?>">

        <title>@yield('web-title')</title>

        {{-- Основные стили ресурса --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        {{-- Подключение фавикона ресурса --}}
        <link rel="shortcut icon" href="{{ asset('images/_favicon.ico') }}">

        {{-- Основные js скрипты ресусра --}}
        <script src="{{ asset('js/app.js') }}" defer></script>
        {{-- Подключение иконок font awesome --}}
        <script src="https://kit.fontawesome.com/6b092b8925.js" crossorigin="anonymous"></script>
        {{-- Подключение библиотеки для вывода графика --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    </head>
    <body>
        {{-- Основной layout ресурса --}}
        @include('includes.navbar')
        <div class="container-fluid">
            <div class="row">
                @include('includes.sidebar')
                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <title>{{ $title ?? 'Админ-панель' }}</title>
</head>
<body class="bg-light">
    <div class="d-flex">
        @auth
            <x-sidebar></x-sidebar>
        @endauth
        <div class="container-fluid p-4 fs-5">
            {{ $slot }}
        </div>
    </div>
    <script src="{{ mix('js/panel.js') }}"></script>
    @stack('scripts')
</body>
</html>

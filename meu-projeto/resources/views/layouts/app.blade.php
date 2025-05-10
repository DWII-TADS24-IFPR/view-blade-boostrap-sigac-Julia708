<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('title', 'SIGAC')</title>
</head>
<body>
    <div class="conteiner">
    <ul class="justify-content-center">
        <h1>Sistema de Gerenciamento de Atividades Complementares</h1>
    </ul>
    @include('layouts.navbar')
        <@yield('content')
    </div>
    @include('layouts.footer')
</body>
</html>
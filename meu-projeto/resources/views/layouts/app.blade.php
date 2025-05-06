<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('title', 'SIGAC')</title>
</head>
<body>
    <div class="conteiner">
        <h1>SIGAC - Sistema de Gerenciamento de Atividades Complementares</h1>
    @include('layouts.navbar')
        <@yield('content')
    </div>
    <!-- @include('layouts.footer') -->
</body>
</html>
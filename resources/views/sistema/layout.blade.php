<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resource/js/app.js'])
</head>
<body>
    <div class="container">
        @component('sistema.navbar')
        @endcomponent
        <main role="main" class="py-4">
            @hasSection('content')
                @yield('content')
            @endif
        </main>     
    </div>    
    <div class="container">
        <div class="card-footer">
            <p class="text-center py-4">Todos os direitos reservados ao homem mais rico do mundo Gueguel de Castro</p>
        </div>
    </div>      
</body>
</html>
<nav class= "navbar navbar--expand-lg navbar-dark rounded">
    <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbar" aria-controls="navbar" aria-expanded="false"
            aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="navbar">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="/">Início</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tarefas</a>
            <div class="dropdown-menu" aria-labelledby="dropdown10">
            <a class="dropdown-item" href="">Cadastrar Discos</a>
            <a class="dropdown-item" href="">Listar Discos </a>
            <a class="dropdown-item" href="">Pesquisar Discos</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tipos</a>
            <div class="dropdown-menu" aria-labelledby="dropdown10">
            <a class="dropdown-item" href="{{route('novoTipo')}}">Cadastrar Discos</a>
            <a class="dropdown-item" href="{{route('indexTipos')}}">Listar Discos</a>
            <a class="dropdown-item" href="{{route('pesquisarTipo')}}">Pesquisar Discos</a>
            </div>
        </li>
</ul> 

        <div class="collapse navbar-collapse id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest 
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acessar')}}</a>
</li>    
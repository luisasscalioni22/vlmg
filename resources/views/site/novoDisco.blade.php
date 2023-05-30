@extends('site.layout')
@section('title', 'Cadastrar Disco')
@section('body')
    <div class="card-body container">
        <h1 class="py-4">Adicionar novo Disco</h1>
        <form action="{{route('gravaNovaNoticia')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Nome da banda/cantor:</label>
                <input for="text" class="form-control" name="titulo" id="titulo"/>
                <label for="descricao">Título do álbum:</label>
                <input for="text" class="form-control" name="descricao" id="descricao">
                <label for="text">Quantidade de músicas:</label>
                <input for="text" class="form-control" name="text" id="text">
                <label for="text">Selecione o estilo:</label>
                <input for="text" class="form-control" name="text" id="text">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        </form>
    </div>
@endsection
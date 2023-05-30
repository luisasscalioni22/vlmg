@extends('site.layout')
@section('title', 'Cadastrar Discos')
@section('body')
    <div class="card-body container">
        <h1 class="py-4">Lista de discos</h1>
        <form action="/discos/{{$data->id}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Titulo do Disco:</label>
                <input for="text" class="form-control" name="titulo" id="titulo" value={{$data->titulo}}>
                <label for="descricao">Descrição do Album:</label>
                <input for="text" class="form-control" name="descricao" id="descricao" value={{$data->descricao}}>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        </form>
    </div>
@endsection
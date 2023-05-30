@extends('site.layout')
@section('title', 'Cadastrar Disco')
@section('body')
    <div class="card-body container">
        <h1 class="py-4">Adicionar novo Estilo</h1>
        <form action="{{route('gravaNovoEvento')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titulo">Estilo:</label>
                <input for="text" class="form-control" name="titulo" id="titulo"/>
            </div>
            <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        </form>
    </div>
@endsection
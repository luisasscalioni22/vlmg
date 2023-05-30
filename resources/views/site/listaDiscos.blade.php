@extends('site.layout')
@section('title', 'Estilo')
@section('body')
<div class="container">
    <h1 class="py-4">Lista de estilos</h1>
    @if (count($evento) == 0)
        <p style="text-align: center;">Não há estilos cadastradas</p>
        <a href="/estilos/cadastrar" class="btn btn-success">Novo estilo</a>
    @else
        <div class="card-body" style="margin-top: 50px;">
            <a href="/estilos/cadastrar" class="btn btn-success">Novo estilo</a>
            <table class="table table-ordered table-hover" id="tabelaEstilos">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Descrição</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($estilo as $item => $value)
                        <tr>
                            <td>{{ $value['id'] }}</td>
                            <td>{{ $value['nome'] }}</td>
                            <td>{{ $value['descricao'] }}</td>

                            <td>
                                <a href="/estilo/editar/{{ $value['id'] }}" class="btn btn-primary">Editar</a>
                                <a href="/estilo/deletar/{{ $value['id'] }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar?')">Deletar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
@extends('layouts.app', ["current" => "categorias"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Cadastro de Categorias</h5>
            <br>

            @if(count($categorias) > 0)
            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome da Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($categorias as $item_categoria)
                    <tr>
                        <td>{{$item_categoria->id}}</td>
                        <td>{{$item_categoria->nome}}</td>
                        <td>
                            <a href="/categorias/editar/{{$item_categoria->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/categorias/apagar/{{$item_categoria->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <h5 class="card-title">Não há categorias cadastradas</h5>
            @endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-sm btn-primary" role="button">Nova Categoria</a>
        </div>
    </div>
@endsection

@extends('layouts.app', ["current" => "produtos"])

@section('body')
    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Todos os Produtos</h5>
            @if (count($produtos) > 0)

            <table class="table table-ordered table-hover">
                <thead>
                    <tr>
                        <th style="width:10%">Código</th>
                        <th style="width:25%">Nome</th>
                        <th style="width:25%">Categoria</th>
                        <th style="width:10%">Estoque</th>
                        <th style="width:10%">Preço</th>
                        <th style="width:20%">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produtos as $item_produto)
                    <tr>
                        <td>{{$item_produto->id}}</td>
                        <td>{{$item_produto->nome}}</td>
                        <td>{{$item_produto->nome_categoria}}</td>
                        <td>{{$item_produto->estoque}}</td>
                        <td>{{$item_produto->preco}}</td>
                        <td>
                            <a href="/produtos/editar/{{$item_produto->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/produtos/apagar/{{$item_produto->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            @else
             <h5 class="card-title">Não há produtos cadastrados</h5>
            @endif
        </div>
        <div class="card-footer">
            <h5 class="card-title">Cadastro de Novos Produtos</h5>
            <a href="/produtos/novo" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
        </div>
    </div>
@endsection

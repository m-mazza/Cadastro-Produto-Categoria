@extends('layouts.app', ["current" => "produtos"])

@section('body')

    <div class="border">
        <div class="card-body">
            <form action="{{url('/produtos')}}" class="row no-gutters" method="POST">
                @csrf
                <div class="col-12">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="nomeProduto">Nome do produto</label>
                            <input id="nomeProduto" type="text" class="form-control" name="nomeProduto" placeholder="Nome do Produto">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="estoqueProduto">Estoque</label>
                            <input id="estoqueProduto" type="text" class="form-control" name="estoqueProduto" placeholder="Estoque">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="precoProduto">Preço</label>
                            <input id="precoProduto" type="text" class="form-control" name="precoProduto" placeholder="Preço">
                        </div>
                    </div>
                </div>
                @if(count($categorias) > 0)
                <div class="col-4">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria" name="pCategoria">
                                <option selected>Selecione Categoria</option>
                                @foreach ($categorias as $item_categoria)
                                <option value="{{$item_categoria->id}}">{{$item_categoria->nome}}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-4">
                    <div class="m-1">
                        <div class="form-group">
                        <label for="categoria">não tem categorias cadastradas</label>
                    </div>
                </div>
                @endif
                <div class="col-12">
                    <a href="{{url('produtos')}}" type="cancel" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>

            </form>
        </div>
    </div>

@endsection

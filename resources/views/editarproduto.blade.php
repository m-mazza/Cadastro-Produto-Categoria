@extends('layouts.app', ["current" => "produtos"])

@section('body')

    <div class="border">
        <div class="card-body">
            <form action="{{url('/produtos/'.$produto->id)}}" class="row no-gutters" method="POST">
                @csrf
                <div class="col-12">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="nomeProduto">Nome do produto</label>
                            <input id="nomeProduto" type="text" class="form-control" name="nomeProduto" placeholder="{{$produto->nome}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="estoqueProduto">Estoque</label>
                            <input id="estoqueProduto" type="text" class="form-control" name="estoqueProduto" placeholder="{{$produto->estoque}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="precoProduto">Preço</label>
                            <input id="precoProduto" type="text" class="form-control" name="precoProduto" placeholder="{{$produto->preco}}">
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="m-1">
                        <div class="form-group">
                            <label for="categoria">Categoria</label>
                            <select class="form-control" id="categoria" name="pCategoria">
                                <option selected value="{{ $produto->categoria_id }}">{{ $nomeCategoriaAtual }}</option>
                                @foreach($categorias as $categoria)
                                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                                @endforeach
                              </select>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="{{url('produtos')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

@endsection

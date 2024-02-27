@extends('layouts.app', ["current" => "categorias"])

@section('body')

    <div class="border">
        <div class="card-body">
            <form action="{{url('/categorias/'.$categoria->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categoria</label>
                    <input id="nomeCategoria" type="text" class="form-control" name="nomeCategoria" value="{{$categoria->nome}}" placeholder="Categoria">
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <button type="cancel" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

@endsection

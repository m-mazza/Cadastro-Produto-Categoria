@extends('layouts.app', ["current" => "categorias"])

@section('body')

    <div class="border">
        <div class="card-body">
            <form action="{{url('/categorias')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeCategoria">Nome da categoria</label>
                    <input id="nomeCategoria" type="text" class="form-control" name="nomeCategoria" placeholder="Categoria">
                </div>
                <a href="{{url('categorias')}}" type="cancel" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@endsection

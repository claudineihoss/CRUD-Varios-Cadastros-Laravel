@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')
<div class="container mt-4">
<h1>Editando: {{ $produto->nome }}</h1>
<form method="POST" action="{{route('produtos.atualizar', $produto)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Código</label>
                    <input type="text" class="form-control" id="" name="codigo" value="{{$produto->codigo}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Descrição</label>
                    <input type="text" class="form-control" id="" name="descricao" value="{{$produto->descricao}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Valor</label>
                    <input type="text" class="form-control" id="" name="valor" value="{{$produto->valor}}">
                </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
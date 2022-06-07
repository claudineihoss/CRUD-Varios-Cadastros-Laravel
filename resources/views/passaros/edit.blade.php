@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')
<div class="container mt-4">
<h1>Editando: {{ $passaro->nome }}</h1>
  <form action="/passaros/update/{{ $passaro->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" value="{{$passaro->nome}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Valor</label>
                    <input type="text" class="form-control" id="" name="cor" value="{{$passaro->cor}}">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Estoque</label>
                    <input type="text" class="form-control" id="" name="valor" value="{{$passaro->valor}}">
                </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
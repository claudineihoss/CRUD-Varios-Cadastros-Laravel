@extends('layouts.template')
@section('title', 'Cadastrar Passaro')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('produtos.insert')}}">
        @csrf

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Codigo</label>
                    <input type="text" class="form-control" id="" name="codigo" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Descrição</label>
                    <input type="text" class="form-control" id="" name="descricao">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleInputEmail1">Valor</label>
                    <input type="text" class="form-control" id="" name="valor">
                </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
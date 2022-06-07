@extends('layouts.template')
@section('title', 'Cadastrar Usuario')
@section('content')
<div class="container mt-4">
    <form method="POST" action="{{route('usuario.insert')}}">
        @csrf

        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" class="form-control" id="" name="usuario">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Senha</label>
                    <input type="password" class="form-control" id="" name="senha">
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                <label for="exampleInputEmail1">Nivel</label>
                        <select class="form-control" name="nivel">
                            <option value='admin'>Administrador</option>
                            <option value='usuario'>Usuario</option>
                        </select>
                </div>
            </div>
        </div>



        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
@extends('layouts.template')
@section('title', 'Editar Produto')
@section('content')
<?php
$nivel = $usuario->nivel;
$senha = base64_decode($usuario->senha);
?>
<div class="container mt-4">
    <h1>Editando: {{ $usuario->nome }}</h1>
    <form method="POST" action="{{route('usuario.atualizar', $usuario)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" class="form-control" id="" name="nome" value={{$usuario->nome}}>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Login</label>
                    <input type="text" class="form-control" id="" name="usuario" value={{$usuario->usuario}}>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Senha</label>
                    <input type="password" class="form-control" id="" name="senha" value={{$senha}}>
                </div>
            </div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nivel</label>
                    <select class="form-control" name="nivel" id="nivel">
                        <option value="admin" <?php $selecionado = '';
                                                if ($nivel == "admin") {
                                                    $selecionado = 'selected';
                                                }
                                                echo $selecionado; ?>>Administrador</option>
                        <option value="usuario" <?php $selecionado = '';
                                                if ($nivel == "usuario") {
                                                    $selecionado = 'selected';
                                                }
                                                echo $selecionado; ?>>Usuario</option>
                    </select>
                </div>
            </div>
        </div>




        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
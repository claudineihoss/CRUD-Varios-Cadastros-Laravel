@extends('layouts.template')
@section('title', 'Usuarios Cadastrados')
@section('content')

<?if(!isset($id)){
  $id = ""; 
}
?>
<div class="container mt-4">

 <a href="{{route('usuario.create')}}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Usuario</a>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">

    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
            <th>ID</th>
              <th>Nome</th>
              <th>Usuario</th>
              <th>Senha</th>
              <th>Nivel</th>
              <th>Ações</th>
            </tr>
          </thead>

          <tbody>
            @foreach($usuarios as $usuario)
            <tr>
            <td>{{$usuario->id}}</td>
              <td>{{$usuario->nome}}</td>
              <td>{{$usuario->usuario}}</td>
              <td>*****</td>
              <td>{{$usuario->nivel}}</td>
              <td>
                <a href="{{route('usuario.edit', $usuario)}}"><i class="fas fa-edit text-info mr-1"></i></a>
                <a href="{{route('usuario.modal', $usuario)}}"><i class="fas fa-trash text-danger mr-1"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja Realmente Excluir este Registro?
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="{{route('usuario.delete', $id)}}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>

<?php 
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>
@endsection
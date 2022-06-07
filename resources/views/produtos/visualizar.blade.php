@extends('layouts.template')
@section('title', 'Produtos')
@section('content')
<?php
?>
<div class="jumbotron">
  <h1 class="display-4"> {{$produto->codigo}} </h1>
  <p class="lead"><?php echo $produto->descricao; ?> - Valor R$ {{$produto->valor}}</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="{{route('produtos')}}" role="button">Ver Produtos</a>
</div>
@endsection
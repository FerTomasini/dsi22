@extends('templates/layout')

@section('titulo', 'Página inicial')

@section('corpo')
    <h1>Tá no caminho certo....</h1>
    <p>Iniciando o site!!!</p>
    <a href="{{route('produto.index')}}">Meu link produto</a> 
@endsection
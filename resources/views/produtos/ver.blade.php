@extends('templates\layout')

@section('titulo', 'Página de Produtos - Ver')

@section('corpo')

    <h1> Produtos - ver</h1>

    <h2> {{($produto->nome)}}</h2>

    <h3> R$ {{ number_format ($produto->preco, 2) }}</h3>
    
@endsection
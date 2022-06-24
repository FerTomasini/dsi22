@extends('templates/layout')

@section('corpo')
    <h1>Index de Produto</h1>
    
    <hr>
    @if(session('usuario'))
        Olá, {{session('usuario.nome')}}!
        <a href="{{ route('usuario.logout') }}">
            Sair
        </a>
    @else
        <a href="{{ route('usuario.index') }}">
        </a>
    @endif
    <hr>

    <p><a href="{{ route('produto.criar') }}">Criar um Produto</a></p>

    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Preco</th>
        </tr>

        @foreach($prods as $prod)
          <tr>
            <td>
            <a href="{{ route('produto.ver', $prod->id) }}">
            {{ $prod->nome }}</td>
            </a>
            <td>{{ $prod->preco}}</td>
        </tr>  
        @endforeach
        
    </table>
@endsection

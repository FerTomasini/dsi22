@extends('templates/layout')

@section('corpo')
    <h1>Index de Produto</h1>
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

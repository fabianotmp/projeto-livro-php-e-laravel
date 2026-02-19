@extends('layout.main')

@section('title', 'Detalhes')

@section('content')

<ul style="list-style: none;">
	<li>Nome: {{$produto->nome}}</li>
	<li>Valor: {{$produto->valor}}</li>
	<li>Descrição: {{$produto->descricao}}</li>
	<li>Quantidade: {{$produto->quantidade}}</li>
</ul>
<br>
<a href="/produtos">Voltar</a>

@endsection
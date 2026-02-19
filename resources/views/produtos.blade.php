@extends('layouts.main')

@section('title', 'Produtos')

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<table border="1" style="border-collapse: collapse">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Valor</th>
			<th>Descrição</th>
			<th>Qtd.</th>
			<th> </th>
		</tr>
	</thead>
	<tbody>		
		@foreach($produtos as $produto)
		<tr>
			<td>{{$produto->nome}}</td>
			<td>{{$produto->valor}}</td>
			<td>{{$produto->descricao}}</td>
			<td>{{$produto->quantidade}}</td>
			<td> <a href="/produtos/detalhes/{{$produto->id}}"><i class="bi bi-search"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>

@endsection
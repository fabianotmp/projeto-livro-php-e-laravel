@extends('layout.main')

@section('title', 'Produtos')

@section('content')

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
			<td> <a href="{{ url('/produtos/show', $produto->id) }}"><i class="bi bi-search"></i></a></td>
		</tr>
		@endforeach
	</tbody>
</table>

{{ $produtos->links('pagination::simple-default') }}

@endsection
@extends('layout.main')

@section('title', 'Cadastrar')

@section('content')
	<form action="{{url('produtos/store')}}" method="POST">
		@csrf
		<label>Nome:</label><br>
		<input type="text" name="nome"><br><br>
		<label>Valor:</label><br>
		<input type="text" name="valor"><br><br>
		<label>Quantidade</label><br>
		<input type="number" name="quantidade"><br><br>
		<label>Descrição</label><br>
		<input type="text" name="descricao"><br><br>

		<button type="submit">Salvar</button>
	</form>
@endsection
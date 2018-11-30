@extends('layouts.app')
@section('content')
<center><h1 class = "h7">Excluir Nota do boletim</h1>
<hr>
<form action="/boletim/{{$boletim->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<p class = "h7">Você realmente deseja excluir a nota de <b>{{$boletim->class}}</b> do boletim de <b>{{$boletim->name}}</b>?</p>
	<input class="btn"type="submit" value="Deletar">
</form>
</center>
@endsection
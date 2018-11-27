@extends('layouts.app')
@section('content')
<center><h1>Excluir Nota do boletim</h1>
<hr>
<form action="/boletim/{{$boletim->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('DELETE') }}
	<p>Você realmente deseja excluir a nota de {{$boletim->class}} do boletim de {{$boletim->user}}?</p>
	<input type="submit" value="Deletar">
</form>
</center>
@endsection
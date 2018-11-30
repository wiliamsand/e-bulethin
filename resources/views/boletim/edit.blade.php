@extends('layouts.app')
@section('content')
<center><h1>Editar nota de {{$boletim->class}} do boletim</h1>
<hr>

  <!-- EXIBE MENSAGENS DE ERROS -->
  @if ($errors->any())
	<div class="container">
	  <div class="alert alert-danger">
	    <ul>
	      @foreach ($errors->all() as $error)
	      <li>{{ $error }}</li>
	      @endforeach
	    </ul>
	  </div>
	</div>
  @endif

<form action="/boletim/{{$boletim->id}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	Matrícula: <input type="text" name="registration" value="{{$boletim->registration}}">
	<br>
	Aluno: <input type="text" name="name" value="{{$boletim->name}}">
	<br>
	Nota: <input type="text" name="note" value="{{$boletim->note}}">
	<br>
	Disciplina:	<input type="text" name="class" value="{{$boletim->class}}">
	<br>
	Trimestre/Semestre: <input type="text" name="period" value="{{$boletim->period}}">
	<br>
	<input type="submit" value="Salvar">
</form>
</center>
@endsection
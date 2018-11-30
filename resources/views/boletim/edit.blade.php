@extends('layouts.app')
@section('content')
<center><h1 class = "h7">Editar nota de <b>{{$boletim->class}}</b> do boletim</h1>
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

<form action="/boletim/{{$boletim->name}}" method="POST">
	{{ csrf_field() }}
	{{ method_field('PUT') }}
	<p class = "h7">Matrícula:</p> <input type="text" name="registration" value="{{$boletim->registration}}">
	<br>
	<p class = "h7">Aluno:</p> <input type="text" name="name" value="{{$boletim->name}}">
	<br>
	<p class = "h7">Nota:</p> <input type="text" name="note" value="{{$boletim->note}}">
	<br>
	<p class = "h7">Disciplina:</p>	<input type="text" name="class" value="{{$boletim->class}}">
	<br>
	<p class = "h7">Trimestre/Semestre:</p> <input type="text" name="period" value="{{$boletim->period}}">
	<br>
	<input type="submit" value="Salvar">
</form>
</center>
@endsection
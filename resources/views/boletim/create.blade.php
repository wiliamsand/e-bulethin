@extends('layouts.app')
@section('content')
<h1 class="h7">Cadastro de Notas do Boletim</h1>
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

<form action="/boletim" method="post">
	{{ csrf_field() }}
	<p class = "h7">Matrícula:</p> <input type="text" name="registration"><br><br>	
	<p class = "h7">Aluno:</p> <input type="text" name="name"><br><br>
	<p class = "h7">Nota:</p> <input type="text" name="note"><br><br>
	<p class = "h7">Disciplina:</p>	<input type="text" name="class"><br><br>
	<p class = "h7">Trimestre/Semestre:</p> <input type="text" name="period"><br><br>
	<input class="btn" type="submit" value="Salvar">
</form>
@endsection
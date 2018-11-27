@extends('layouts.app')
@section('content')
<h1>Cadastro de Notas do Boletim</h1>
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
	Matrícula: <input type="text" name="registration"><br>
	Aluno: <input type="text" name="user"><br>
	Disciplina:	<input type="text" name="class"><br>
	Nota: <input type="text" name="note"><br>
	Trimestre/Semestre: <input type="text" name="period"><br>
	<input type="submit" value="Salvar">
</form>
@endsection
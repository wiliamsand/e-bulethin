@extends('layouts.app')
@section('content')
<center><h1>Formulário de Edição da boletim {{$boletim->id}}</h1>
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
	Título: 		<input type="text" name="title" value="{{$boletim->title}}"><br><br>
	Descrição:		<input type="text" name="description" value="{{$boletim->description}}"><br><br>
	Agendado para:  <input type="datetime-local" name="scheduledto" value="{{$boletim->scheduledto}}"><br><br>
	<input type="submit" value="Salvar">
</form>
</center>
@endsection
<center>
<h1>Lista de Atividades</h1>
<br><br>
</center>
  <!-- EXIBE MENSAGENS DE SUCESSO -->
  @if(\Session::has('success'))
	<div class="container">
  		<div class="alert alert-success">
    		{{\Session::get('success')}}
  		</div>
  	</div>
  @endif

@foreach($atividades as $atividade)
	<b>Título: </b><a href="/atividades/{{$atividade->id}}">{{$atividade->title}}</a>
  <p><b>Agendado para: </b>{{\Carbon\Carbon::parse($atividade->scheduledto)->format('d/m/Y h:m')}}</p>
	<p><b>Descrição: </b>{{$atividade->description}}</p>
  <p><b>Ações: </b>
    <b><a href="/atividades/{{$atividade->id}}">Sobre</a></b>
    <b><a href="/atividades/{{$atividade->id}}/edit">Editar</a></b> 
    <b><a href="/atividades/{{$atividade->id}}/delete">Deletar</a></b>
  </p>
@endforeach

<p><a href="/atividades/create">Criar nova atividade</a></p>


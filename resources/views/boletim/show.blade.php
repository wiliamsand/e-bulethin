@extends('layouts.app')
@section('content')
<h1>Boletim {{$boletim->id}}</h1>
<hr>
<h3><b>ID:</b> {{$boletim->id}}</h3>
<h3><b>Título:</b> {{$boletim->title}}</h3>
<h3><b>Agendado para:</b> {{\Carbon\Carbon::parse($boletim->scheduledto)->format('d/m/Y h:m')}}</h3>
<h3><b>Descrição:</b> {{$boletim->description}}</h3>
<h3><b>Criada em:</b> {{\Carbon\Carbon::parse($boletim->created_at)->format('d/m/Y h:m')}}</h3>
<h3><b>Atualizada em:</b> {{\Carbon\Carbon::parse($boletim->updated_at)->format('d/m/Y h:m')}}</h3>
@endsection



<!-- \Carbon\Carbon::parse($boletim->scheduledto)->format('d/m/Y h:m')  -->
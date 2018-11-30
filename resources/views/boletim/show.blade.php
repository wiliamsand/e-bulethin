@extends('layouts.app')
@section('content')

<h3> {{$boletim->class}} </h3>
<hr>
<p><b>Aluno:</b> <p>{{$boletim->name}}</p>

<p><b>Nota:</b> <p>{{$boletim->note}}</p>

<p><b>Matrícula:</b> <p>{{$boletim->registration}}</p>

<p><b>Trimestre/Semestre:</b> <p>{{$boletim->period}}</p>





@endsection



<!-- \Carbon\Carbon::parse($boletim->scheduledto)->format('d/m/Y h:m')  -->
@extends('layouts.app')
@section('content')

<h3 class = "h7"> {{$boletim->name}} </h3>
<hr>
<p class = "h7"><b>Aluno:</b> <p class = "h7">{{$boletim->name}}</p>

<p class = "h7"><b>Nota:</b> <p class = "h7">{{$boletim->note}}</p>

<p class = "h7"><b>Matrícula:</b> <p class = "h7">{{$boletim->registration}}</p>

<p class = "h7"><b>Trimestre/Semestre:</b> <p class = "h7">{{$boletim->period}}</p>





@endsection



<!-- \Carbon\Carbon::parse($boletim->scheduledto)->format('d/m/Y h:m')  -->
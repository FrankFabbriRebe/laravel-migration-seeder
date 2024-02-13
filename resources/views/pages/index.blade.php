@extends('layouts.main-layout')
@section('head')
<title>Trains</title>
@endsection
@section('content')
<h1>Table train</h1>
<ul>
    @foreach ($trains as $train)

    <li>Azienda: {{$train -> azienda}}</li>
    <li>Stazione di patenza: {{$train -> stazione_di_partenza}}</li>
    <li>Stazione di arrivo: {{$train -> stazione_di_arrivo}}</li>
    <li>Orario di partenza: {{$train -> orario_di_partenza}}</li>
    <li>Orario di arrivo: {{$train -> orario_di_arrivo}}</li>
    <li>Codice treno: {{$train -> codice_treno}}</li>
    <li>Numero numero carrozze: {{$train -> numero_carrozze}}</li>
    <li>In orario: {{$train -> in_orario}}</li>
    <li>Cancellato: {{$train -> cancellato}}</li>

    <br>

    @endforeach
</ul>
@endsection
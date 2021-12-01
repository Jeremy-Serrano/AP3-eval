@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Mes evenements associés à {{$Type->NomType}}</h2>
    
    <ul>
        <li>Description : {{$Type->Description}}</li>
        
        @foreach ($Evenement AS $un_evenement)
        <li>Date de l'evenement : {{$un_evenement->DateEvent}}</li>
        @endforeach
    </ul>

</div>
@endsection
 
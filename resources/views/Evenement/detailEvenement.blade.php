@extends('layouts.app')

@section('content')
<div class="container">

    <h2>Mes evenements associés à {{ $Type->NomType }}</h2>

    <ul>
        <li>Description : {{ $Type->Description }}</li>
        @foreach ($Evenement as $un_evenement)
        <li>Date de l'evenement : {{ $un_evenement->DateEvent }}

            <form action="{{ url('/Evenement', ['id' => $un_evenement->Id_Evenement]) }}" method="post">
                <input class="btn btn-default" type="submit" value="Delete" />
                @method('delete')
                @csrf
            </form>

            <a href="{{route('Evenement.edit', $un_evenement->Id_Evenement)}}">Modifier</a>
        </li>
        @endforeach
    </ul>

    <a href="{{ route('Evenement.create') }}">Ajouter un Evenement</a>

</div>
@endsection
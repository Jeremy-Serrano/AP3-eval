@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Enregistrer un nouvel evenement :</h2><br />
    <form method="post" action="{{route('Evenement.store')}}">
    @csrf
    <div class="row">
        <div class="cold-md-6">
            <div class="form-group row">    
                <label for="NomType" class="col-sm-4"> Nom de l'evenement :</label>
                <input type="text" class="form-control col-sm-6" name=NomType required>
            </div>
            <div class="form-group row">    
                <label for="Description" class="col-sm-4"> Description:</label>
                <input type="text" class="form-control col-sm-6" name=Description required>
            </div>
            <div class="form-group row">    
                <label for="DateEvent" class="col-sm-4"> Date de l'evenement:</label>
                <input type="text" class="form-control col-sm-6" name=DateEvent required>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Modifier un evenement :</h2><br />
    <form method="post" action="{{route('Evenement.store')}}">
        @csrf
        <div class="row">
            <div class="cold-md-6">
                <div class="form-group row">
                    <div class="form-group row">
                        <label for="date" class="col-sm-4"> Date de l'evenement :</label>
                        <input type="text" class="form-control col-sm-6" name=date required>
                    </div>
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Valider') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class='container'>
                    <h2>Tout les types</h2>

                        @foreach ($Type AS $Un_type)

                    <li>
                        
                        <a href="{{route('Evenement.show' ,$Un_type->Id_Type)}}">{{$Un_type->NomType}}</a>
                    </li>
                    
                    @endforeach
                    </div> 

            </div>
        </div>
    </div>
</div>
@endsection

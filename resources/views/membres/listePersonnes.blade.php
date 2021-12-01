@extends('layouts.app')

@section('content')
<div class='container'>
	@foreach ($personnes AS $p)
	<li>{{$p->nom}}</li>
	@endforeach
</div>
@endsection
@extends('layout')


@section('content')

	<h1 class="title"> {{ $centro->numero }}</h1>
	<div class="card-content">
		{{ $centro->nombre }}
	</div>
		<p>
		<a href="/centros/{{ $centro->id }}/edit" "">Editar</a>	
	</p>
@endsection
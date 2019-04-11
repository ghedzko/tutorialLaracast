@extends('layout')


@section('content')
	<h1 class="title">Editar Información del Centro de Formación {{ $centro->numero }}</h1>
	<form method="POST" action="/centros/{{ $centro->id }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="field">
			<label class="<label" for="title">Número</label>
			<div class="control">
				<input type="text" class="input" name="numero" placeholder="Numero" value="{{ $centro->numero }}" tabindex="1" required>
			</div>
		</div>
		<div class="field">
			<label class="label" for="nombre">Nombre</label>
			<div class="control">
				<textarea name="nombre" class="textarea" tabindex="2" required>{{ $centro->nombre }}</textarea>
				
			</div>
		</div>
		<div class="control">
		  <button type = "submit"class="button is-primary" tabindex="3">Actualizar Centro</button>
		</div>
	</form>
	<form method="POST" action="/centros/{{ $centro->id }}">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="control">
			
		  <button type = "submit"class="button is-danger" tabindex="4">Borrar Centro</button>
		</div>
	</form>


@endsection
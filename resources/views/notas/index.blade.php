
@extends('layouts/app')
@section('content')
<section class="hero is-primary">
	<div class="hero-body">
	    <div class="container">
		      <h1 class="title">
		        Listado de Notas
		      </h1>
	    </div>
	    <hr>
	    <p class="control">
		    <a class="button is-link is-rounded is-large" href="/notas/create">
		      <span class="icon is-small">
		        <i class="fas fa-plus-circle"></i>
		      </span>
		      <span>Nueva Nota</span>
		    </a>
  		</p>
  	</div>
</section>
<div class="box">
	<table class="table is-striped is-fullwidth">

		<thead>
			<tr class=""> 
				<th>Número</th>
				<th>Asunto</th>
				<th>Descripción</th>
				<th>Adjunto</th>
				<th>Borrar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($notas as $nota)
				<tr>
					<td><a href="/notas/{{ $nota->id }}/edit"> {{ $nota -> numero }} </a></td>
					<td><a href="/notas/{{ $nota->id }}/edit"> {{ $nota -> asunto }} </a></td>
					<td><a href="/notas/{{ $nota->id }}/edit"> {{ $nota -> descripcion }} </a></td>
					<td><a href="{{Storage::url($nota -> adjunto)}}"> {{ $nota -> adjunto }} </a></td>
<!-- 					<td>
						<form action="/notas/{{ $nota->id }}">
							{{ csrf_field() }}
							<button type="submit" class="button is-warning">editar</button>
						</form>
					</td> -->
					<td>
						<form method="POST" action="/notas/{{ $nota->id }}">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button type="submit" class="button is-danger">borrar</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

</div>
		
@endsection
@extends('layout')

@section('content')
	<div class="hero-body">
	    <div class="container">
		      <h1 class="title">
		        Crear nuevo proyecto
		      </h1>
	    </div>
  	</div>
		<ul>
			@foreach($projects as $project)
			<li>
				<a href="/projects/{{ $project->id }}">
				
					{{ $project -> title }}
				</a>
			</li>
			@endforeach
		</ul>
@endsection
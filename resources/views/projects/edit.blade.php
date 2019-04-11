@extends('layout')


@section('content')
	<h1 class="title">Edit project</h1>
	<form method="POST" action="/projects/{{ $project->id }}">
		{{ method_field('PATCH') }}
		{{ csrf_field() }}
		<div class="field">
			<label class="<label" for="title">Title</label>
			<div class="control">
				<input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}" tabindex="1" required>
			</div>
		</div>
		<div class="field">
			<label class="label" for="description">Description</label>
			<div class="control">
				<textarea name="description" class="textarea" tabindex="2" required>{{ $project->description }}</textarea>
				
			</div>
		</div>
		<div class="control">
		  <button type = "submit"class="button is-primary" tabindex="3">Update Project</button>
		</div>
	</form>
	<form method="POST" action="/projects/{{ $project->id }}">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<div class="control">
			
		  <button type = "submit"class="button is-danger" tabindex="4">Delete Project</button>
		</div>
	</form>


@endsection
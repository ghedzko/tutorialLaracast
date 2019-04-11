@extends('layout')


@section('content')

	<h1 class="title"> {{ $project->title }}</h1>
	<div class="card-content">
		{{ $project->description}}
	</div>
		<p>
		<a href="/projects/{{ $project->id }}/edit" "">Edit</a>	
	</p>
@if ($project->tasks->count())
		<div class="box">
			@foreach($project->tasks as $task)
					<form method="Post" accept-charset="utf-8"  action="/tasks/{{ $task->id }}">
						@method('PATCH')
						@csrf
							<label class="chekbox {{ $task->completed ? 'is-complete' : '' }}"for="completed">
							<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>

								
									{{ $task->description }}
								
								
							</label>
					</form>
			@endforeach
		</div>
		
@endif

<form method="POST" action="/projects/{{ $project->id }}/tasks" class="box">
	@csrf
	<div class="field">
		<label class="label" for="description">New Task</label>
		<div class="control">
			<input type="text" class="input" name="description" placeholder="New Task">
			
		</div>
		
	</div>

	<div class="field">
		<div class="control">
			<button type="submit" class="button is-link">Add Task</button>
			
		</div>
		
	</div>
</form>
 @include ('errors')
	
@endsection
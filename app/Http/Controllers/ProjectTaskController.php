<?php

namespace NotasSys\Http\Controllers;

use NotasSys\Task;
use NotasSys\Project;

class ProjectTaskController extends Controller
{
    public function update(Task $task)
    {
    	request()->has('completed') ? $task->complete() : $task->incomplete();
    	// $task->update([
    	// 	'completed' => request()->has('completed')
    	// ]);
    	return back();
    }
    public function store(Project $project)
    {
    	$atributes = request()->validate(['description' => 'required']);
    	$project->addTask($atributes);

    	return back();
    }
}

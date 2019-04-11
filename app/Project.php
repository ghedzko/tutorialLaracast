<?php

namespace NotasSys;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];
    public function tasks()
    {
    	return $this->hasMany('NotasSys\Task'); 
    }
    public function addTask($task)
    {
    	//dd(compact('description'));
    	$this->tasks()->create($task);
    	// return Task::create([
    	// 	'project_id' => $this->id,
    	// 	'description' => $description
    	// ]);
    }
}

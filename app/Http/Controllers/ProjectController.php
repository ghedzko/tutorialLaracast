<?php

namespace NotasSys\Http\Controllers;
// use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        return view('projects.index', compact('projects'));
    }
    public function index()
{

    $projects = \NotasSys\Project::all()->where('owner_id', auth()->id());

    return view('projects.index', compact('projects'));
}
     public function create()
    {
    	
    	
    	return view('projects.create');
    }


    public function store()
    {
        $attributes=request()->validate([
                'title' => 'required',
                'description'=> 'required',

        ]);

    	\NotasSys\Project::create($attributes + ['owner_id'=> auth()->id()]);

    	
        return redirect('/projects');
    }
    public function edit(\NotasSys\Project $project)
    {
    	return view('projects.edit',compact('project'));
    }
    public function update(\NotasSys\Project $project)
    {
        $project->update(request(['title', 'description']));
    	// \NotasSys\Project::update(request(['title','description']));
    	// $project->title=request('title');
    	// $project->description=request('description');
    	// $project->save();
    	return redirect('/projects');
    }
    public function destroy(\NotasSys\Project $project)
    {
    	$project->delete();

    	return redirect('/projects');
    }
    public function show(\NotasSys\Project $project)
    {
//    	abort_if($project->owner_id!==auth()->id(),403,"no no no");
        $this->authorize('view',$project);
    	return view('projects.show',compact('project'));
    }

}

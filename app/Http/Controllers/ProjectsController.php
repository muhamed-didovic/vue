<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Show the page to create a new project.
     */
    public function create()
    {
        return view('projects.create'/*, [
            'projects' => Project::all()
        ]*/);
    }
    /**
     * Store a new project in the database.
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            "description" => 'required'
        ]);
        Project::forceCreate([
            'name' => request('name'),
            'description' => request('description')
        ]);
        
        return response()->json([
            'message' => 'Project Created!',
            'projects' => Project::all()
        ]);
    }
    
    public function projects()
    {
        return response()->json([
            'projects' => Project::all()
        ]);
    }
    
    public function destory(Project $project)
    {
//        dd($project);
        try {
            $project->delete();
            return response()->json([
                'message' => 'Project Deleted!',
                'projects' => Project::all()
            ]);
        } catch (\Exception $e){
            return response()->json($e->getMessage(), 422);
        }
        if ($project)
        return response()->json([
            'projects' => Project::all()
        ]);
    }
}

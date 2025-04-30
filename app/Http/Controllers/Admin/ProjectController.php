<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view("projects.create", compact("types"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        
        $data = $request->all();

        $newProject= new Project();
        $newProject->name = $data["name"];
        $newProject->client = $data["client"];
        $newProject->project_start = $data["project_start"];
        $newProject->project_end = $data["project_end"];
        $newProject->description = $data["description"];


        $newProject->save();

        $newProject->types()->attach($data["tags"]);

        return redirect()->route("projects.show", $newProject);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        $types = Type::all();
        return view("projects.edit", compact("project", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $project = Project::findOrFail($id);

        // $project->name = $data["name"];
        // $project->client = $data["client"];
        // $project->project_start = $data["project_start"];
        // $project->project_end = $data["project_end"];
        // $project->description = $data["description"];
        
        // $project->save();

        $project->update($data);

        $project->types()->sync($data["tags"]);

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route("projects.index");

    }
}

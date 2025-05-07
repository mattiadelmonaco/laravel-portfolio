<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
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
        $technologies = Technology::all();
        return view("projects.create", compact("types", "technologies"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $newProject = new Project();

        $newProject->name = $data["name"];
        $newProject->client = $data["client"];
        $newProject->start_period = $data["start_period"];
        $newProject->end_period = $data["end_period"];
        $newProject->summary = $data["summary"];
        $newProject->type_id = $data["type_id"];

        $newProject->save();

        $newProject->technologies()->attach($data["technologies"]);

        return redirect()->route("projects.show", $newProject->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        // dd($project->technologies);

        return view("projects.show", compact("project"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();

        return view("projects.edit", compact("project", "types"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();

        $project->name = $data["name"];
        $project->client = $data["client"];
        $project->start_period = $data["start_period"];
        $project->end_period = $data["end_period"];
        $project->summary = $data["summary"];
        $project->type_id = $data["type_id"];

        $project->update();

        return redirect()->route("projects.show", $project->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {

        $project->delete();

        return redirect()->route("projects.index");
    }
}

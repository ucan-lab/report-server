<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        return Project::all();
    }

    public function store(Request $request)
    {
        return Project::create($request->all());
    }

    public function show(Project $Project)
    {
        return $Project;
    }

    public function update(Request $request, Project $Project)
    {
        return $Project->update($request->all());
    }

    public function destroy(Project $Project)
    {
        return $Project->delete();
    }    
}

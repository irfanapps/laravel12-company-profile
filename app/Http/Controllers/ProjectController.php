<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::where('is_active', true)
            ->orderBy('is_featured', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(9);

        return view('projects.index', compact('projects'));
    }

    public function show(Project $project)
    {
        // Increment view count
        $project->increment('view_count');

        return view('projects.show', compact('project'));
    }
}

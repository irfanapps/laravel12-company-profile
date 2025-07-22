<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'client_name' => 'required|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'project_url' => 'nullable|url',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            //'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            //'is_featured' => 'boolean',
            //'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        // Upload cover image
        if ($request->hasFile('cover_image')) {
            $validated['cover_image'] = $request->file('cover_image')->store('projects', 'public');
        }

        // Upload gallery images
        if ($request->hasFile('gallery')) {
            $gallery = [];
            foreach ($request->file('gallery') as $image) {
                $gallery[] = $image->store('projects/gallery', 'public');
            }
            $validated['gallery'] = $gallery;
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil ditambahkan!');
    }

    public function show(Project $project)
    {
        dd($project);
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'client_name' => 'required|string|max:255',
            'client_company' => 'nullable|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'project_url' => 'nullable|url',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            //'gallery.*' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            //'is_featured' => 'boolean',
            //'is_active' => 'boolean'
        ]);

        $validated['slug'] = Str::slug($request->title);
        $validated['is_active'] = $request->has('is_active') ? 1 : 0;

        // Update cover image if new one is uploaded
        if ($request->hasFile('cover_image')) {
            // Delete old cover image
            if ($project->cover_image) {
                Storage::disk('public')->delete($project->cover_image);
            }
            $validated['cover_image'] = $request->file('cover_image')->store('projects', 'public');
        }

        // Update gallery images if new ones are uploaded
        if ($request->hasFile('gallery')) {
            // Delete old gallery images
            if ($project->gallery) {
                foreach ($project->gallery as $image) {
                    Storage::disk('public')->delete($image);
                }
            }

            $gallery = [];
            foreach ($request->file('gallery') as $image) {
                $gallery[] = $image->store('projects/gallery', 'public');
            }
            $validated['gallery'] = $gallery;
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil diperbarui!');
    }

    public function destroy(Project $project)
    {
        // Delete cover image
        if ($project->cover_image) {
            Storage::disk('public')->delete($project->cover_image);
        }

        // Delete gallery images
        if ($project->gallery) {
            foreach ($project->gallery as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Proyek berhasil dihapus!');
    }
}

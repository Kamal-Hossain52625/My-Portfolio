<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Front Portfolio
     */
    public function index()
    {
        $projects = Project::latest()->get();

        return view('home', compact('projects'));
    }

    /**
     * Admin Dashboard
     */
    public function dashboard()
    {
        $projects = Project::latest()->get();

        return view('admin.dashboard', compact('projects'));
    }

    /**
     * Show Create Form
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store Project
     */
    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|max:255',

            'category' => 'required|max:255',

            'project_link' => 'nullable|url',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);


        $image = null;

        if ($request->hasFile('image')) {

            $image = $request->file('image')->store('projects', 'public');

        }


        Project::create([

            'title' => $request->title,

            'category' => $request->category,

            'project_link' => $request->project_link,

            'image' => $image,

        ]);


        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Project Added Successfully!');
    }

    /**
     * Show Edit Form
     */
    public function edit(Project $project)
    {
        return view('admin.edit', compact('project'));
    }

    /**
     * Update Project
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([

            'title' => 'required|max:255',

            'category' => 'required|max:255',

            'project_link' => 'nullable|url',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);


        if ($request->hasFile('image')) {

            if ($project->image && Storage::disk('public')->exists($project->image)) {

                Storage::disk('public')->delete($project->image);

            }

            $project->image = $request->file('image')->store('projects', 'public');
        }


        $project->title = $request->title;

        $project->category = $request->category;

        $project->project_link = $request->project_link;

        $project->save();


        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Project Updated Successfully!');
    }

    /**
     * Delete Project
     */
    public function destroy(Project $project)
    {
        if ($project->image && Storage::disk('public')->exists($project->image)) {

            Storage::disk('public')->delete($project->image);

        }

        $project->delete();

        return redirect()
            ->route('admin.dashboard')
            ->with('success', 'Project Deleted Successfully!');
    }
}
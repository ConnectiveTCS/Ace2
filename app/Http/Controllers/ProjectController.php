<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'clientName'            => 'nullable|string|max:255',
            'clientBusinessName'    => 'nullable|string|max:255',
            'clientProjectCategory' => 'nullable|array',
            'clientProjectName'     => 'nullable|string',
            'clientShortStudy'      => 'nullable|string',
            'clientProjectDuration' => 'nullable|string|max:255',
            'clientReviewProject'   => 'nullable|string|max:255',
            'clientProfilePicture'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
            'clientImage'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
            'clientRating'          => 'nullable|string|max:5',
        ]);

        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('clientProfilePicture')) {
            $data['clientProfilePicture'] = $request->file('clientProfilePicture')->store('projects', 'public');
        }
        if ($request->hasFile('clientImage')) {
            $data['clientImage'] = $request->file('clientImage')->store('projects', 'public');
        }
        Project::create($data);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view('projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $data = $request->validate([
            'clientName'            => 'nullable|string|max:255',
            'clientBusinessName'    => 'nullable|string|max:255',
            'clientProjectCategory' => 'nullable|array',
            'clientProjectName'     => 'nullable|string|max:255',
            'clientShortStudy'      => 'nullable|string',
            'clientProjectDuration' => 'nullable|string|max:255',
            'clientReviewProject'   => 'nullable|string|max:255',
            'clientProfilePicture'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
            'clientImage'           => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp,avif|max:10048',
            'clientRating'          => 'nullable|string|max:5',
        ]);

        $data['user_id'] = Auth::user()->id;

        if ($request->hasFile('clientProfilePicture')) {
            $data['clientProfilePicture'] = $request->file('clientProfilePicture')->store('projects', 'public');
        }
        if ($request->hasFile('clientImage')) {
            $data['clientImage'] = $request->file('clientImage')->store('projects', 'public');
        };
        $project->update($data);
        
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();
        return redirect()->route('projects.index');
    }
}

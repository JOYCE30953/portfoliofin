<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('admin.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
        ]);

        Project::create([
            'titre' => $request->titre,
            'description' => $request->description,
        ]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $project = Project::find($id);

        if ($project) {
            $project->delete();
        }

        return redirect()->back();
    }
}
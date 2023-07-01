<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $projects = Project::with('media')->paginate(3);
        return view('projects.index', [
            'projects' => $projects
        ]);
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $project = Project::with('media')->findOrFail($id);

        return view('projects.show', [
            'project' => $project
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectCollection;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use Inertia\Inertia;

class ProjectController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Projects/Index', [
            'projects' => ProjectCollection::make(Project::all())
        ]);
    }

    public function show($slug)
    {
        return Inertia::render('Projects/Show', [
            'project' => ProjectResource::make(
                Project::query()
                    ->where('slug', $slug)
                    ->first()
            )
        ]);
    }
}

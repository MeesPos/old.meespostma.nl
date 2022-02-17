<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectCollection;
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
        return 'Landed';
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryCollection;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProjectCollection;
use App\Models\Category;
use App\Models\Project;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index($slug)
    {
        return Inertia::render('Categories/Index', [
            'category' => $category = CategoryResource::make(
                Category::query()
                    ->where('slug', $slug)
                    ->first()
            ),
            'projects' => ProjectCollection::make(
                Project::query()
                    ->where('category_id', $category->id)
                    ->get()
            )
        ]);
    }
}

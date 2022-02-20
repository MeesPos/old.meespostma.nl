<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index($slug)
    {
        return Inertia::render('Categories/Index', [
            'category' => CategoryResource::make(
                Category::query()
                    ->where('slug', $slug)
                    ->first()
            )
        ]);
    }
}

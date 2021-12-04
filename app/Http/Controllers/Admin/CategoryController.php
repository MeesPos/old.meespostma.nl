<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(CategoryRequest $request): \Illuminate\Http\RedirectResponse
    {
        Category::query()
            ->create($request->validated());

        return back();
    }
}

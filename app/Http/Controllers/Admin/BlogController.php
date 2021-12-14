<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class BlogController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Admin/Blog/Index', [
            'posts' => Post::query()
                ->paginate(10)
                ->through(function ($post) {
                    return [
                        'id' => $post->id,
                        'title' => $post->title,
                        'category' => $post->category->name,
                        'created_at' => Carbon::createFromDate($post->created_at)->format('d-m-Y')
                    ];
                })
        ]);
    }

    public function create(): \Inertia\Response
    {
        return Inertia::render('Admin/Blog/Create', [
            'categories' => Category::query()
                ->get()
                ->map(function ($category) {
                    return [
                        'id' => $category->id,
                        'name' => $category->name
                    ];
            }),
            'tags' => Tag::query()
                ->get()
                ->map(function ($tag) {
                    return $tag->name;
                })
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
        $data = collect($request->validated());

        $data['featured_image'] = $request->file('featured_image')->store('posts/featured_images', 'public');

        $post = Post::query()
            ->create($data->except('tags')->toArray());


        foreach ($data['tags'] as $tag) {
            $tag = Tag::query()
                ->where('name', $tag)
                ->firstOrCreate([
                    'name' => $tag
                ]);

            PostTag::query()
                ->updateOrCreate([
                    'post_id' => $post['id'],
                    'tag_id' => $tag['id']
                ]);
        }

        return Redirect::route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

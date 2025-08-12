<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogPostResource;
use App\Models\Blog\Post;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BlogPostResource
     */
    public function index(): BlogPostResource
    {
        return BlogPostResource::make(Post::query()->with('tags', 'author')->orderByDesc('id')->paginate($this->pageSize()));
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return BlogPostResource
     */
    public function show(Post $post): BlogPostResource
    {
        return BlogPostResource::make($post);
    }
}

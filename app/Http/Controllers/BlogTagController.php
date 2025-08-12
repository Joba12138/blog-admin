<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogPostResource;
use App\Models\Blog\Post;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return BlogPostResource
     */
    public function index(): BlogPostResource
    {
//        return BlogPostResource::make(Tag::query()->get());
    }

    /**
     * Display the specified resource.
     *
     * @param Post $post
     * @return BlogPostResource
     */
    public function show(Post $post): BlogPostResource
    {
//        return BlogPostResource::make($post);
    }
}

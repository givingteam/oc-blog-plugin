<?php namespace GivingTeam\Blog\Http\Controllers;

use GivingTeam\Blog\Classes\ApiController;
use RainLab\Blog\Models\Post;

class PostController extends ApiController
{
    /**
     * Index
     * 
     * @return Illuminate\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        $options = input();

        return Post::with('categories')->listFrontEnd($options);
    }

    /**
     * Show
     * 
     * @param  string                   $slug
     * @return RainLab\Blog\Models\Post
     */
    public function show(string $slug)
    {
        return Post::isPublished()
            ->whereSlug($slug)
            ->firstOrFail();
    }
}
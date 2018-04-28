<?php namespace GivingTeam\Blog\Http\Controllers;

use GivingTeam\Blog\Classes\ApiController;
use RainLab\Blog\Models\Post;

class PostController extends ApiController
{
    /**
     * Posts.
     * 
     * @return Illuminate\Pagination\LengthAwarePaginator
     */
    public function index()
    {
        $options = input();

        return Post::listFrontEnd($options);
    }
}
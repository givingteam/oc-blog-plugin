<?php namespace GivingTeam\Blog\Http\Controllers;

use GivingTeam\Blog\Classes\ApiController;
use RainLab\Blog\Models\Category;

class CategoryController extends ApiController
{
    /**
     * Index
     * 
     * @return Illuminate\Pagination\LengthAwarePaginator
     */
    public function index()
    {

        return Category::all();
    }
}
<?php namespace GivingTeam\Blog\Tests\Unit;

use Carbon\Carbon;
use GivingTeam\Blog\Tests\PluginTestCase;
use RainLab\Blog\Models\Category;

class CategoryApiTest extends PluginTestCase
{
    public function test_fetching_categories()
    {
        Category::truncate();

        $category = Category::create([
            'name' => 'Some category',
            'slug' => 'some-category',
        ]);

        $response = $this->get('/api/givingteam/blog/categories');
        $data = json_decode($response->getContent(), true);

        $this->assertEquals(1, count($data));
        $this->assertEquals($category->id, $data[0]['id']);
    }
}
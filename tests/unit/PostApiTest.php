<?php namespace GivingTeam\Blog\Tests\Unit;

use Carbon\Carbon;
use GivingTeam\Blog\Tests\PluginTestCase;
use RainLab\Blog\Models\Post;

class PostApiTest extends PluginTestCase
{
    public function test_fetching_posts()
    {
        $foo = new Post;
        $foo->slug = 'foo-test';
        $foo->title = 'foo';
        $foo->content = 'foo';
        $foo->published_at = Carbon::yesterday();
        $foo->published = true;
        $foo->save();

        $bar = new Post;
        $bar->slug = 'bar-test';
        $bar->title = 'bar';
        $bar->content = 'bar';
        $bar->save();

        $response = $this->get('/api/givingteam/blog/posts');
        $data = json_decode($response->getContent(), true);

        $response->assertStatus(200);
        $this->assertEquals(1, $data['total']);
        $this->assertEquals(1, $data['current_page']);
        $this->assertEquals($foo->id, $data['data'][0]['id']);
    }

    public function test_fetching_posts_on_second_page()
    {
        $response = $this->get('/api/givingteam/blog/posts?page=2');
        $data = json_decode($response->getContent(), true);

        $response->assertStatus(200);
        $this->assertEquals(2, $data['current_page']);
    }

    public function test_fetching_a_single_post()
    {
        $post = new Post;
        $post->slug = 'foo-test';
        $post->title = 'foo';
        $post->content = 'foo';
        $post->published_at = Carbon::yesterday();
        $post->published = true;
        $post->save();

        $response = $this->get('/api/givingteam/blog/posts/' . $post->slug);
        $data = json_decode($response->getContent(), true);

        $response->assertStatus(200);
        $this->assertEquals($post->id, $data['id']);
    }
}
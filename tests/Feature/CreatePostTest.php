<?php

namespace Tests\Feature;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(User::factory()->create());
    }

    /** @test */
    public function it_can_create_a_post()
    {
        $this->post('dashboard/posts', [
            'title' => 'Test title',
            'featured_image' => 'test.png',
            'category' => 'Test',
            'tags' => [
                'Test Tag',
                Tag::factory()->create()->get('name')
            ],
            'content' => 'This is test content'
        ])->dump();
    }
}

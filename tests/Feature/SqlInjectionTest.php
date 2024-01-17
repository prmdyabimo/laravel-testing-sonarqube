<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class SqlInjectionTest extends TestCase
{
    public function testRetrievePostById()
    {
        $id = 1;

        $post = DB::table('posts')
        ->select('postTitle', 'postBody')
        ->where('id', $id)
            ->first();

        // Assert that the post is not null
        $this->assertNotNull($post);
    }
}

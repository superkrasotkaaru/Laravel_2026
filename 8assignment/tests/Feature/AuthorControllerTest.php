<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Author;

class AuthorControllerTest extends TestCase
{
    use RefreshDatabase; 

    public function test_can_create_author_via_post()
    {
        $response = $this->post('/authors', [
            'name' => 'Stephen',
            'surname' => 'King',
            'birthdate' => '1947-09-21'
        ]);

        $response->assertStatus(302);

        $response->assertRedirect('/authors');

        $this->assertDatabaseHas('authors', [
            'name' => 'Stephen',
            'surname' => 'King'
        ]);
    }
}
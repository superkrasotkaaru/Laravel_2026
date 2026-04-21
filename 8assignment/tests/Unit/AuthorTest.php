<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Author;

class AuthorTest extends TestCase
{
    public function test_full_name_returns_correct_format()
    {
        $author = new Author([
            'name' => 'George',
            'surname' => 'Orwell'
        ]);

        $this->assertEquals('George Orwell', $author->fullName());
    }
}
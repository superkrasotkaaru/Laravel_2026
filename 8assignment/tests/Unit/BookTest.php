<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Book;

class BookTest extends TestCase
{
    public function test_book_can_store_and_retrieve_short_title()
    {
        $book = new Book([
            'title' => 'The Lord of the Rings',
            'short_title' => 'LOTR'
        ]);

        $this->assertEquals('LOTR', $book->short_title);
    }
}
<?php

namespace App\Dto;

class BookDto
{
    public function __construct(public string $ISBN,public string $bookTitle,public string $authorName,public int $pagesCount,public $publishDate)
    {

    }
}
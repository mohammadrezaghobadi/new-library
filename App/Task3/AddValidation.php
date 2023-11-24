<?php

namespace App\Task3;

use Exception;

class AddValidation
{
    /**
     * @throws Exception
     */
    public function addValidation($request): void
    {
        foreach ($request -> book as $item){
            if (gettype($item -> ISBN) !== "string"){
                throw new Exception();
            }elseif (gettype($item -> bookTitle) !== "string"){
                throw new Exception();
            }elseif (gettype($item -> authorName) !== "string"){
                throw new Exception();
            }elseif (gettype($item -> pagesCount) !== "integer"){
                throw new Exception();
            }elseif (gettype($item -> publishDate) !== "string"){
                throw new Exception();
            }
        }
    }
}
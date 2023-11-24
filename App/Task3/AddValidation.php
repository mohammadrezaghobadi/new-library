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
        if (gettype($request -> book -> ISBN) !== "string"){
            throw new Exception();
        }elseif (gettype($request -> book -> bookTitle) !== "string"){
            throw new Exception();
        }elseif (gettype($request -> book -> authorName) !== "string"){
            throw new Exception();
        }
    }
}
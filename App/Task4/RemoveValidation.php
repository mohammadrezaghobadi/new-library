<?php

namespace App\Task4;

use Exception;

class RemoveValidation
{
    /**
     * @throws Exception
     */
    public function validationShow($request): void
    {
        if(gettype($request -> parameters -> remove) !== "string"){
            throw new Exception();
        }
    }
}
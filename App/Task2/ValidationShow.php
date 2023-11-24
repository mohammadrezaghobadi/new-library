<?php

namespace App\Task2;

use Exception;

class ValidationShow
{
    /**
     * @throws Exception
     */
    public function validationShow($request){
        if(gettype($request -> parameters -> ISBN) !== "string"){
            throw new Exception();
        }
    }
}
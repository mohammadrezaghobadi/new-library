<?php

namespace App\Task1;

class ValidationIndex
{
    /**
     * @throws \Exception
     */
    public function checkValidation($request){
        if (gettype($request -> parameters -> page) !== "integer"){
            throw new \Exception();
        }elseif (gettype($request -> parameters -> perPage) !== "integer"){
            throw new \Exception();
        }elseif (gettype($request -> parameters ->authorName) !== "string"){
            throw new \Exception();
        }
    }
}
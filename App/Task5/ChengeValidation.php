<?php

namespace App\Task5;

use Exception;

class ChengeValidation
{
    /**
     * @throws Exception
     */
    public function chengeValidation($reqoust): void
    {
        if($reqoust -> update[1][0] === "ISBN"){
            throw new \ValueError();
        }elseif (gettype($reqoust -> update) !== "array"){
            throw new Exception();
        }elseif (gettype($reqoust -> update[1][0]) !== "string"){
            throw new Exception();
        }elseif (gettype($reqoust -> update[1][1]) === "double" || gettype($reqoust -> update[1][1]) === "array"){
            throw new Exception();
        }elseif (gettype($reqoust -> update[1]) !== "array"){
            throw new Exception();
        }elseif (gettype($reqoust -> update[0]) === "double" || gettype($reqoust -> update[0]) === "array") {
            throw new Exception();
        }
    }
}
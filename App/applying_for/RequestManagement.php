<?php

namespace App\applying_for;

use App\Task1\BookIndex;
use App\Task1\ValidationIndex;
use Exception;

class RequestManagement
{
    /**
     * @var mixed
     */
    public mixed $request;

    public function __construct($request)
    {
        $this -> request = $request;
    }
    public function management():void{
        if($this -> request -> command_name === "Task1"){
            $validationIndex = new ValidationIndex();
            try {
                $validationIndex -> checkValidation($this -> request);
                $bookIndex = new BookIndex($this -> request -> parameters);
                $bookIndex -> handel();
            }catch (Exception $e){
                echo "Enter the desired type";
            }
        }
    }
}
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
    public $request;

    public function __construct($request)
    {
        $this -> request = $request;
    }
    public function management(){
        if($this -> request -> command_name === "Task1"){
            $validationIndex = new ValidationIndex();
            try {
                $validationIndex -> checkValidation($this -> request);
                new BookIndex($this -> request);
            }catch (Exception $e){
                echo "Enter the desired type";
            }
        }
    }
}
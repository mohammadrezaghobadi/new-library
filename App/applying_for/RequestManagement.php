<?php

namespace App\applying_for;

use App\Task1\BookIndex;
use App\Task1\ValidationIndex;
use App\Task2\ValidationShow;
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
        $this -> task1();
    }
    public function task1():void{
        if($this -> request -> command_name === "Task1"){
            $validationIndex = new ValidationIndex();
            try {
                $validationIndex -> checkValidation($this -> request);
                $bookIndex = new BookIndex($this -> request -> parameters);
                $bookIndex -> handel();
            }catch (Exception $e){
                echo "<br />";
                echo "Enter the desired type";
            }catch (\ValueError){
                echo "<br />";
                echo "Enter the desired index";
            }
        }
    }
    public function task2():void{
        if($this -> request -> command_name === "Task2"){
            $validationShow = new ValidationShow();
            try {
                $validationShow -> validationShow($this -> request);
            }catch (Exception){
                echo "<br />";
                echo "Enter the desired type";
            }
        }
    }
}
<?php

namespace App\applying_for;

use App\Task1\BookIndex;
use App\Task1\ValidationIndex;
use App\Task2\ShowBook;
use App\Task2\ValidationShow;
use Exception;

class RequestManagement
{
    /**
     * @var mixed
     */
    private mixed $request;

    public function __construct($request)
    {
        $this -> request = $request;
    }
    public function management():void{
        if($this -> request -> command_name === "Task1"){
            $this -> task1();
        }elseif ($this -> request -> command_name === "Task2"){
            $this -> task2();
        }
    }
    private function task1():void{
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
    private function task2():void{
        $validationShow = new ValidationShow();
        try {
            $validationShow -> validationShow($this -> request);
            $bookShow = new ShowBook($this -> request -> parameters);
            $bookShow -> handel();
        }catch (Exception){
            echo "<br />";
            echo "Enter the desired type";
        }
    }
}
<?php

namespace App\applying_for;

use App\Task1\BookIndex;
use App\Task1\ValidationIndex;
use App\Task2\ShowBook;
use App\Task2\ValidationShow;
use App\Task3\AddBook;
use App\Task3\AddValidation;
use App\Task4\RemoveBook;
use App\Task4\RemoveValidation;
use App\Task5\ChangeDataBook;
use App\Task5\ChengeValidation;
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

    /**
     * @throws Exception
     */
    public function management():void{
        if($this -> request -> command_name === "Task1"){
            $this -> task1();
        }elseif ($this -> request -> command_name === "Task2"){
            $this -> task2();
        }elseif ($this -> request -> command_name === "Task3") {
            $this->task3();
        }elseif ($this -> request -> command_name === "Task4"){
            $this -> task4();
        }else{
            $this -> task5();
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

    /**
     * @throws Exception
     */
    private function task3(): void
    {
        $addValidation = new AddValidation();
        try {
            $addValidation -> addValidation($this -> request -> parameters);
            $bookNew = new AddBook($this -> request -> parameters);
            $bookNew -> handel();
        }
    }
    private function task4(): void
    {
        $removeValidation = new RemoveValidation();
        try {
            $removeValidation -> validationShow($this -> request);
            $removeBook = new RemoveBook($this -> request -> parameters);
            $removeBook -> handel();
        } catch (Exception $e) {
            echo "<br />";
            echo "Enter the desired type";
        }
    }

    private function task5():void{
        $changeValidation = new ChengeValidation();
        try {
            $changeValidation -> chengeValidation($this -> request -> parameters);
            $changeDataBook = new ChangeDataBook($this -> request -> parameters);
            $changeDataBook -> handel();
        }catch (\ValueError){
            echo "You cannot change ISBN";
        }catch (Exception){
            echo "Enter the desired type";
        }
    }
}
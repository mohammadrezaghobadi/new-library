<?php

namespace App\applying_for;

class Request
{
    public function request(){
        return json_decode(file_get_contents(__DIR__ . "\..\..\assingment\commands.json"));
    }
    public function requestManagement():void{
        $requestManagement = new RequestManagement($this -> request());
        $requestManagement -> management();
    }

}
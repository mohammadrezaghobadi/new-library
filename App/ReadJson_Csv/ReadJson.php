<?php

namespace App\ReadJson_Csv;

class ReadJson
{
    public function readFileJson(){
        $fileJson = json_decode(file_get_contents(__DIR__ . "\..\..\assingment\database\books.json"),true);
        return $fileJson;
    }
}
<?php

namespace App\Task1;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;

class BookIndex
{
    /**
     * @var mixed
     */
    public $request;
    public function __construct($request)
    {
        $this -> request = $request;
    }
    private function handelDataCsv():array{
        $converToObjectCsv = new ConverToObjectCsvFile();
        return $converToObjectCsv -> converToObjectCsv();
    }
    private function handelDataJson():array{
        $converToObjectJson = new ConverToObjectJsonFile();
        return $converToObjectJson -> converToObjectJson();
    }
    public function mergeData():array{
        return array_merge($this -> handelDataJson(),$this->handelDataCsv());
    }
    public function handel():void{
        $arrangeTheLibrary = new ArrangeTheLibrary();
        $arrangeTheLibrary -> arrange($this -> mergeData());
    }
}
<?php

namespace App\Task1;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;
use App\Trait\TraitTime;

class BookIndex
{
    use TraitTime;
    /**
     * @var mixed
     */
    public mixed $request;
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

    public function timeStamp():array{
        return $this -> timeObject($this -> mergeData());
    }
    public function handel():void{
        $arrangeTheLibrary = new ArrangeTheLibrary();
        $arrangeTheLibrary -> arrange($this -> timeStamp());
    }
}
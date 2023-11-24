<?php

namespace App\Task2;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;
use App\Trait\TraitTime;
use Exception;

class ShowBook
{
    use TraitTime;
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
    private function handelDataCsv():array{
        $converToObjectCsv = new ConverToObjectCsvFile();
        return $converToObjectCsv -> converToObject();
    }

    /**
     * @throws Exception
     */
    private function handelDataJson():array{
        $converToObjectJson = new ConverToObjectJsonFile();
        return $converToObjectJson -> converToObject();
    }

    /**
     * @throws Exception
     */
    public function mergeData():array{
        return array_merge($this -> handelDataJson(),$this->handelDataCsv());
    }

    /**
     * @throws Exception
     */
    public function timeStamp():array{
        return $this -> timeObject($this -> mergeData());
    }

    /**
     * @throws Exception
     */
    public function handel(): void{
        $showAuthor = new ShowAuthor();
        echo "<br />";
        echo "--------------------------------";
        echo "<br />";
        echo "show_Author";
        $showAuthor -> showAuthor($this -> timeStamp(),$this -> request -> ISBN);
    }
}
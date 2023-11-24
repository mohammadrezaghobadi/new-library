<?php

namespace App\Task1;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;
use App\Trait\TraitTime;
use Exception;

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
    public function handel():void{
        $arrangeTheLibrary = new ArrangeTheLibrary();
        $authorsChoise = new AuthorsChoice();
        echo "<br />";
        echo "--------------------------------";
        echo "<br />";
        echo "arrange_authorName";
        $arrangeTheLibrary -> arrange($this -> timeStamp());
        echo "<br />";
        echo "--------------------------------";
        echo "<br />";
        echo "choise_authorName";
        $authorsChoise -> choiseData($this -> timeStamp(),$this -> request -> authorName,$this -> request -> page,$this -> request -> perPage);
    }
}
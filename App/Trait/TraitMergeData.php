<?php

namespace App\Trait;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;
use Exception;

trait TraitMergeData
{
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
}
<?php

namespace App\ReadJson_Csv;

class ReadCsv
{
    public function readFileCsv(){
        $fileCsv = [];
        $fp = fopen(__DIR__ . "\..\..\assingment\database\books.csv","r");
        while ($data = fgetcsv($fp)){
            $fileCsv[] = $data;
        }
        fclose($fp);
        for ($i = 1; $i < count($fileCsv);$i ++){
            $combine[] = array_combine($fileCsv[0],$fileCsv[$i]);
        }
        return $combine;
    }
}
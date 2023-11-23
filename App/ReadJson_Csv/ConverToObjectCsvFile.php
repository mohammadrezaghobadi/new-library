<?php

namespace App\ReadJson_Csv;

use App\Dto\BookDto;
use Exception;

class ConverToObjectCsvFile implements ConverToObjectCsvInterface
{
    public function readCsvFile():array{
        $fileCsv = [];
        $combine = [];
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

    /**
     * @throws Exception
     */
    public function converToObjectCsv():array{
        $lst = [];
        $timestamp = $this -> readCsvFile();
        foreach ($timestamp as $item){
            $lst[] = new BookDto($item["ISBN"],$item["bookTitle"],$item["authorName"],$item["pagesCount"],$item["publishDate"]);
        }
        return $lst;
    }
}
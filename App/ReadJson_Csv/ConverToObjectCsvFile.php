<?php

namespace App\ReadJson_Csv;

use App\Dto\BookDto;

class ConverToObjectCsvFile
{
    public function converToObjectCsv(){
        $fileCsv = [];
        $fp = fopen(__DIR__ . "\..\..\assingment\database\books.csv","r");
        while ($data = fgetcsv($fp)){
            $fileCsv[] = $data;
        }
        fclose($fp);
        for ($i = 1; $i < count($fileCsv);$i ++){
            $combine[] = array_combine($fileCsv[0],$fileCsv[$i]);
        }
        foreach ($combine as $item){
            $lst[] = new BookDto($item["ISBN"],$item["bookTitle"],$item["authorName"],$item["pagesCount"],$item["publishDate"]);
        }
        return $lst;
    }
}
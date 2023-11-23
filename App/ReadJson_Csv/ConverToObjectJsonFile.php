<?php

namespace App\ReadJson_Csv;

use App\Dto\BookDto;

class ConverToObjectJsonFile implements ConverToObjectJsonInterface
{
    public function converToObjectJson():array{
        $fileJson = json_decode(file_get_contents(__DIR__ . "\..\..\assingment\database\books.json"),true);
        foreach ($fileJson["books"] as $item){
            $lst[] = new BookDto($item["ISBN"],$item["bookTitle"],$item["authorName"],$item["pagesCount"],$item["publishDate"]);
        }
        return $lst;
    }
}
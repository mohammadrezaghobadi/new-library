<?php

namespace App\ReadJson_Csv;

use App\Dto\BookDto;
use Exception;

class ConverToObjectJsonFile implements ConverToObjectJsonInterface
{
    public function readJsonFile():array{
        return json_decode(file_get_contents(__DIR__ . "\..\..\assingment\database\books.json"),true);
    }
    /**
     * @throws Exception
     */
    public function converToObjectJson():array{
        $lst = [];
        $timeStamp = $this -> readJsonFile()["books"];
        foreach ($timeStamp as $item){
            $lst[] = new BookDto($item["ISBN"],$item["bookTitle"],$item["authorName"],$item["pagesCount"],$item["publishDate"]);
        }
        return $lst;
    }
}
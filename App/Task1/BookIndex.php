<?php

namespace App\Task1;

use App\Dto\BookDto;
use App\ReadJson_Csv\ReadCsv;
use App\ReadJson_Csv\ReadJson;

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
    public function converToObject(){
        $readJson = new ReadJson();
        $readCsv = new ReadCsv();
        $lst = [];
        foreach ($readJson -> readFileJson()["books"] as $item){
            $lst[] = new BookDto($item["ISBN"],$item["bookTitle"],$item["authorName"],$item["pagesCount"],$item["publishDate"]);
        }
        foreach ($readCsv -> readFileCsv() as $item){
            $lst[] = new BookDto($item["ISBN"],$item["bookTitle"],$item["authorName"],$item["pagesCount"],$item["publishDate"]);
        }
        var_dump($lst);
    }
}
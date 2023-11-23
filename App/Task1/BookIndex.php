<?php

namespace App\Task1;

use App\Dto\BookDto;
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
    private function converToObject(){
        foreach (new ReadJson() as $item){
            new BookDto($item["books"]["ISBN"],$item["books"]["bookTitle"],$item["books"]["ISBN"],$item["books"]["ISBN"],$item["books"]["ISBN"]);
        }
    }
}
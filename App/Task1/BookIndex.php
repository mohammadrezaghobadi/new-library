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

    }
}
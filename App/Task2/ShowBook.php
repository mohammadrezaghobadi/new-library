<?php

namespace App\Task2;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;
use App\Trait\MergeData;
use App\Trait\TraitTime;
use Exception;

class ShowBook
{
    use TraitTime;
    use MergeData;

    /**
     * @throws Exception
     */
    public function timeStamp():array{
        return $this -> timeObject($this -> mergeData());
    }

    /**
     * @throws Exception
     */
    public function handel(): void{
        $showAuthor = new ShowAuthor();
        echo "<br />";
        echo "--------------------------------";
        echo "<br />";
        echo "show_Author";
        $showAuthor -> showAuthor($this -> timeStamp(),$this -> request -> ISBN);
    }
}
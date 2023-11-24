<?php

namespace App\Task1;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;
use App\Trait\MergeData;
use App\Trait\TraitTime;
use Exception;

class BookIndex
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
    public function handel():void{
        $arrangeTheLibrary = new ArrangeTheLibrary();
        $authorsChoise = new AuthorsChoice();
        echo "<br />";
        echo "--------------------------------";
        echo "<br />";
        echo "arrange_authorName";
        $arrangeTheLibrary -> arrange($this -> timeStamp());
        echo "<br />";
        echo "--------------------------------";
        echo "<br />";
        echo "choise_authorName";
        $authorsChoise -> choiseData($this -> timeStamp(),$this -> request -> authorName,$this -> request -> page,$this -> request -> perPage);
    }
}
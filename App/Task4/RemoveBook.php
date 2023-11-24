<?php

namespace App\Task4;

use App\ReadJson_Csv\ConverToObjectCsvFile;
use App\ReadJson_Csv\ConverToObjectJsonFile;
use App\Trait\MergeData;
use App\Trait\TraitTime;
use Exception;

class RemoveBook
{
    use TraitTime;
    use MergeData;

    /**
     * @throws Exception
     */
    private function timeStamp():array{
        return $this -> timeObject($this -> mergeData());
    }

    /**
     * @throws Exception
     */
    public function handel(): void
    {
        $removeBook = new DeletBook();
        $removeBook -> removeBooks($this -> timeStamp(),$this -> request -> remove);
    }
}
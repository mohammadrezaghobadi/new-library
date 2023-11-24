<?php

namespace App\Task4;

use App\Trait\TraitMergeData;
use App\Trait\TraitTime;
use Exception;

class RemoveBook
{
    use TraitTime;
    use TraitMergeData;

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
        echo "<br />";
        echo "--------------------------------";
        echo "<br />";
        echo "remove_book";
        $removeBook -> removeBooks($this -> timeStamp(),$this -> request -> remove);
    }
}
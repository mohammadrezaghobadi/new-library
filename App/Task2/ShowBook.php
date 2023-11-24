<?php

namespace App\Task2;

use App\Trait\TraitMergeData;
use App\Trait\TraitTime;
use Exception;

class ShowBook
{
    use TraitTime;
    use TraitMergeData;

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
<?php

namespace App\Task5;

use App\Trait\TraitMergeData;
use App\Trait\TraitTime;
use Exception;

class ChangeDataBook
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
    public function handel(): void
    {
        $updateDataBook = new UpdateDataBook();
        $updateDataBook -> changeDataBooks($this -> timeStamp(),$this -> request -> update);
    }
}
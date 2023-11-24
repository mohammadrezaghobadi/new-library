<?php

namespace App\Task3;

use App\Trait\TraitMergeData;
use App\Trait\TraitTime;
use Exception;

class AddBook
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
        $addBookNew = new AddBookNew($this -> request -> book);
        $addBookNew -> newBook($this -> timeStamp());
    }
}
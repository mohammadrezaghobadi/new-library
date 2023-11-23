<?php

namespace App\Trait;

use Exception;

trait TraitTime
{
    /**
     * @throws Exception
     */
    public function timeObject($data):array{
        $timeStamp = [];
        foreach ($data as $time) {
            $time -> publishDate = new \DateTime($time -> publishDate);
            $timeStamp[] = $time;
        }
        return $timeStamp;
    }
}
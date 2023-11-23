<?php

namespace App\Task1;

class ArrangeTheLibrary
{
    public function arrange($data):void{
        usort($data,fn ($a , $b) => $a -> publishDate < $b -> publishDate ? 1 : -1);
        var_dump($data);
    }
}
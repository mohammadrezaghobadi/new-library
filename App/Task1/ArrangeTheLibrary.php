<?php

namespace App\Task1;

class ArrangeTheLibrary
{
    public function arrange($data):void{
        usort($data,fn ($a , $b) => $a -> publishDate < $b -> publishDate ? 1 : -1);
        foreach ($data as $items){
            echo "<br />";
            echo '-------------------------' . "<br />";
            foreach ($items as $item){
                echo "<br />";
                print_r($item);
            }
        }
    }
}
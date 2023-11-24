<?php

namespace App\Task4;

class DeletBook
{
    public function removeBooks($data,$deletdata):void{
        $delet = array_filter($data, fn($i) => $i -> authorName === $deletdata || $i -> bookTitle === $deletdata);
        foreach (array_keys($delet) as $item) {
            unset($data[$item]);
        }
        foreach ($data as $items) {
            echo "<br />";
            echo '------------------------------' . "<br />";
            foreach ($items as $item) {
                echo "<br />";
                print_r($item) . "<br />";
            }
        }
    }
}
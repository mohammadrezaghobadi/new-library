<?php

namespace App\Task2;

class ShowAuthor
{
    public function showAuthor($data,$isbn): void
    {
        $search = array_filter($data,fn ($i) => $i -> ISBN === $isbn);
        if (count($search) === 0){
            echo "<br />";
            echo '------------------------------' . "<br />";
            echo 'no Books!' . "<br />";
        }else {
            foreach ($search as $items) {
                echo "<br />";
                echo '------------------------------' . "<br />";
                foreach ($items as $item) {
                    echo "<br />";
                    print_r($item) . "<br />";
                }
            }
        }
    }
}
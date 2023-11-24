<?php

namespace App\Task5;

class UpdateDataBook
{
    public function changeDataBooks($data,$change):void{
        $update = array_filter($data,fn ($i) => $i -> authorName === $change[0] || $i -> bookTitle === $change[0]
        || $i -> pagesCount === $change[0] || $i -> publishDate === $change[0]
        );
        if($change[1][0] === "authorName"){
            foreach (array_keys($update) as $key){
                $data[$key] -> authorName = $change[1][1];
            }
        }elseif ($change[1][0] === "bookTitle"){
            foreach (array_keys($update) as $key){
                $data[$key] -> bookTitle = $change[1][1];
            }
        }elseif ($change[1][0] === "pagesCount"){
            foreach (array_keys($update) as $key){
                $data[$key] -> pagesCount = $change[1][1];
            }
        }else{
            foreach (array_keys($update) as $key){
                $data[$key] -> publishDate = $change[1][1];
            }
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
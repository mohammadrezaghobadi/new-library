<?php

namespace App\Task1;
class AuthorsChoice
{
    public function choiseData($data,$authorNames,$page,$perPage):void{
        $filter = array_filter($data,fn ($i) => $i -> authorName === $authorNames);
        if($perPage >= count(array_chunk($filter,$page)) || $perPage < 0){
            echo '------------------------------' . "<br />";
            echo 'no Books!' . "<br />";
        }else{
            $chunk = array_chunk($filter,$page)[$perPage];
            foreach ($chunk as $items){
                echo "<br />";
                echo '----------------------------' . "<br />";
                foreach ($items as $item){
                    echo "<br />";
                    print_r($item);
                }
            }
        }
    }
}
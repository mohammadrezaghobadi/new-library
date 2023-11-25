<?php

namespace App\Task3;

use AllowDynamicProperties;
use App\Dto\BookDto;
use App\Trait\TraitTime;
use Biblys\Isbn\Isbn;
use Exception;

#[AllowDynamicProperties] class AddBookNew
{
    use TraitTime;
    public function __construct($book)
    {
        $this -> book = $book;
    }
    private function newBookDto():array{
        $lst = [];
        foreach ($this -> book as $item){
            $lst[] = new BookDto($item -> ISBN,$item -> bookTitle,$item -> authorName,$item -> pagesCount,$item -> publishDate);
        }
        return $lst;
    }

    /**
     * @throws Exception
     */
    private function newTimeObject(): array
    {
        return $this -> timeObject($this -> newBookDto());
    }

    /**
     * @throws Exception
     */
    public function newBook($data): void
    {
        try {
            foreach ($this -> newTimeObject() as $book){
                Isbn::validateAsEan13(str_replace("-","",$book -> ISBN));
            }
            foreach ($this -> newTimeObject() as $book){
                foreach ($data as $item){
                    if ($item -> ISBN === $book -> ISBN){
                        $newBook = $data;
                        break 2;
                    }else{
                        $newBook = array_merge($data ,$this -> newTimeObject());
                    }
                }
            }
            foreach ($newBook as $items) {
                echo "<br />";
                echo '------------------------------' . "<br />";
                foreach ($items as $item) {
                    echo "<br />";
                    print_r($item) . "<br />";
                }
            }
        } catch (\Biblys\Isbn\IsbnValidationException $e) {
            echo "The desired ISBN is not of the ISBN-13 type";
        }
    }
}
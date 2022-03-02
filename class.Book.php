<?php
class Book {
    private $name;
    private $author;

    public function setName(string $name) {
        $this->name = $name;
        return $this;   
    }  
    public function setAuthor(string $author) {
        $this->author = $author;
        return $this; 
    }  
    public function __toString() {
        $bookInfo = 'Book Name: ' . $this->name . PHP_EOL;        
        $bookInfo .= 'Book Author: ' . $this->author . PHP_EOL;        
        return $bookInfo;    
    }
}                                             
$book = new Book();
$book->setName('Harry Potter')->setAuthor('J. K. Rowlings');
echo $book;
?>
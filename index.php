<?php
  class Book {
    public $name; 
    public $author; 
    public $year; 
    public $isbn; 
    public $sconto=0;

    public  function setSconto($year)
    {
      if ($year < 1900) {
        $this->sconto = 30;
      }
    }
    public function getSconto()
    {
      $this->sconto;
    }
  }

$firstBook = new Book ();
$firstBook ->name = "Lo hobbit";
$firstBook ->author = "J.R.R. Tolkien";
$firstBook ->year = "1937";
$firstBook ->isbn = "8845268349";
$firstBook ->setSconto($firstBook ->year);
$sconto= $firstBook->getSconto();

var_dump($firstBook);

$secondBook = new Book();
$secondBook->name = "Donne";
$secondBook->author = "Charles Bukowski";
$secondBook->year = "1978";
$secondBook->isbn = "8877467614";
$secondBook ->setSconto($secondBook ->year);
$sconto= $secondBook->getSconto();

var_dump($secondBook);

$thirdBook = new Book();
$thirdBook->name = "Piccole donne";
$thirdBook->author = "Louisa May Alcott";
$thirdBook->year = "1868";
$thirdBook->isbn = "8831002473";
$thirdBook ->setSconto($thirdBook ->year);
$sconto= $thirdBook->getSconto();

var_dump($thirdBook);

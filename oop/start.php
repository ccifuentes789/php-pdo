<?php

require_once 'Book.php';

$phpOOS = new Book('PHP Object Oriented Solutions', 300);
$jsGoodParts = new Book('JS Good Parts', 145);

//echo Book::$createdCount;
echo Book::count();

//$phpOOS->title = 'PHP Object Oriented Solutions';

/*echo $phpOOS->title;
echo $phpOOS->pages;
var_dump($phpOOS->isValid());
echo $phpOOS;*/


//echo $phpOOS->listedAt; //cannot access, data is protected
//$book2 = new Book();
//echo $book2->title;



?>
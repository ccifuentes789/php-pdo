<?php
require_once 'Product.php';
class Book extends Product{
    public $pages;
    public $authors;
    protected $listedAt;
    protected static $createdCount = 0;
    //variables across all instances accessible using static or self, this variable stores how many books are created

    //public, protected, private
    public function __construct($title, $pages){
        //constructor for book, inheriting from product.php
        static::$createdCount++;
        $this->listedAt = time();
        $this->pages = $pages;
        parent::__construct($title);

    }

    public static function count(){
        return static::$createdCount;
    }
}

?>
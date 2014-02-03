<?php

class Product{
    public $title;
    public $price;
//any method with two underscores called a "Magic Method"

    public function __construct($title = 'NA'){
        $this->title = $title;
    }

    public function isValid(){
        if($this->title){
            return true;
        }
        else
            return false;
    }

    public function __toString(){
        return $this->title;
    }


}
?>
<?php

//require_once __DIR__ . '/Yelp/Review.php';
//require_once __DIR__ .  '/OpenTable/Review.php';

/*
function __autoload($class){
    var_dump($class);
    die();
}*/
/*
spl_autoload_register(function($class) {
    var_dump($class);
});
spl_autoload_register(function($class) {
    var_dump($class);
});*/


require __DIR__ . '/vendor/autoload.php';

$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();


use Yelp\Reviews\Review as YelpReview;
use OpenTable\Reviews\Review as OpenTableReview;
use Hunger\Billing\PayPal as PayPal;

$billing = new PayPal();

$review1 = new YelpReview();
$review2 = new OpenTableReview();
?>
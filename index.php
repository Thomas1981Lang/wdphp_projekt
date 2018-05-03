<?php

//require_once("vendor/autoload.php");
//
//$f3 = \Base::instance();
//
//$f3->route('GET /',
//    function () {
//        echo 'Hello World!';
//    }
//);
//
//$f3->run();

$f3 = require('vendor/bcosca/fatfree/lib/base.php');
$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);
$f3->run();
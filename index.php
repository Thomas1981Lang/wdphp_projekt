<?php

require_once("vendor/autoload.php");

$f3 = \Base::instance();

class Main {
    function render() {
        echo 'Hello world';
    }

    function sayhello() {
        echo 'hallo babe';
    }
}


$f3->route('GET /','Main->render');
$f3->route(GET /hello, 'Main->sayhello');

$f3->run();


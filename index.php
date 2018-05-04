<?php

require_once("vendor/autoload.php");

$f3 = \Base::instance();

//globale Variablen in config.ini speichern
$f3->config('config.ini');
$f3->config('routes.ini');

$f3->run();














//moved into config.ini --- DEBUG LEVELS
//$f3->set('DEBUG', 3);

//moved into routes.ini
//$f3->route('GET /','Main->render');
//$f3->route('GET /test', 'Main->sayhello');
//$f3->route('GET /about', 'AboutPage->render');


//  php -S localhost:8088 -t .
//function render($f3){
//  echo $f3->get('variable'); }
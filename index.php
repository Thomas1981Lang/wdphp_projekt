<?php

require_once("vendor/autoload.php");

$f3 = \Base::instance();

//globale Variablen in config.ini speichern
$f3->config('config.ini');
$f3->config('routes.ini');

//moved into config.ini --- DEBUG LEVELS
//$f3->set('DEBUG', 3);

class AppController {
    function beforeroute() {
       // echo 'before routing for session - ';
    }

    function afterroute() {
       // echo ' - After routing';
    }
}

class Main extends AppController {

    function render() {
        $home = new Template;
        echo $home->render('home.html');
    }

    function sayhello() {
        $app = new Template;
        echo $app->render('app.html');
    }
}

class AboutPage extends AppController {
    function render() {
        echo 'This is the about page';
    }
}

//moved into routes.ini
//$f3->route('GET /','Main->render');
//$f3->route('GET /test', 'Main->sayhello');
//$f3->route('GET /about', 'AboutPage->render');

$f3->run();

//  php -S localhost:8088 -t .
//function render($f3){
//  echo $f3->get('variable'); }
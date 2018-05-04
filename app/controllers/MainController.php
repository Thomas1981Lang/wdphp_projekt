<?php

class MainController extends Controller {

    function render() {
        $home = new Template;
        echo $home->render('home.html');
    }

    function sayhello() {
        $app = new Template;
        echo $app->render('app.html');
    }
}
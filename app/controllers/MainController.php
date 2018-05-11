<?php

class MainController extends Controller
{

    function beforeroute()
    {

    }


    function render()
    {
        $home = new Template;
        echo $home->render('home.html');
    }

    function app()
    {
        $app = new Template;
        echo $app->render('app.html');
    }


}
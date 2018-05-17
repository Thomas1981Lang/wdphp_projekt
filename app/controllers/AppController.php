<?php

class AppController extends Controller
{

    function beforeroute()
    {

    }


    function render()
    {
        $app = new Template;
        echo $app->render('app.html');
    }


}
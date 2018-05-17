<?php

class HomeController extends Controller
{

    function beforeroute()
    {

    }


    function render()
    {
        $home = new Template;
        echo $home->render('home.html');
    }



}
<?php

class SneakController extends Controller
{

    function beforeroute()
    {

    }


    function render()
    {
        $home = new Template;
        echo $home->render('sneak.html');
    }



}
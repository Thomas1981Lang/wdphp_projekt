<?php

class UserhomeController extends Controller
{


    function render()
    {
        $app = new Template;
        echo $app->render('userhome.html');
    }


}
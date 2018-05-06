<?php

class TestController extends Controller {


    function test() {

        $this->f3->set('view', 'userhome.html');
        $template = new Template;
        echo $template->render('layout.html');
    }
}
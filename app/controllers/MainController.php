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

    function test() {

        $messages = new Messages($this->db);
        $messages->key = 'Secondmessage';
        $messages->message = 'This is the second message inserted from code.';
        $messages->save();

        $messages = new Messages($this->db);
        $msg = $messages->all()[1];

        $this->f3->set('msg', $msg);
        $template = new Template;
        echo $template->render('test.html');
    }
}
<?php

class SigntestController extends Controller
{

    function beforeroute()
    {

    }

    function render()
    {
        $login = new Template;
        echo $login->render('signin_test.php');
    }

    function signin()
    {
        $username = $this->f3->get('POST.username');
        $password = $this->f3->get('POST.password');

        $user = new User($this->db);
        $user->getByName($username);

        if($user->dry()) {
            $this->f3->reroute('/login');
        }

        if(password_verify($password, $user->password)) {
            $this->f3->set('SESSION.user', $user->username);
            $this->f3->reroute('/test');
        } else {
            $this->f3->reroute('/login');
        };
    }

}
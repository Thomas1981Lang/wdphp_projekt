<?php
require_once 'Formgen/Form.php';
require_once 'Formgen/Input.php';
require_once 'Formgen/Checkbox.php';
require_once 'Formgen/Radio.php';
require_once 'Formgen/Reset.php';
require_once 'Formgen/Select.php';
require_once 'Formgen/Submit.php';
require_once 'Formgen/Textarea.php';
class SigntestController extends Controller
{

    function beforeroute()
    {

    }

    function render()
    {
        $conf = \Signin::getFormConf();
        $form = new \Formgen\Form($conf);
        $isSent = $form->isSent();
        $validData = false;

        $login = new Template;

        $out = '';
        if ($form->isSent()) {
            $validData = $form->isValid();
            if (!$validData) {
                $out = $form->render();
            }
            else {
                if ($validData['user'] === 'Test' && $validData['passwort'] === "test12") {
                    header('Location: todo.php');
                } else {
                    $out .= '<p>BN oder PW falsch!</p>';
                    $out .= $form->render();
                }

            }
        }
        else {
            $out = $form->render();
        }
        $this->f3->set('output', $out);

        echo $login->render('signin_test.html');
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
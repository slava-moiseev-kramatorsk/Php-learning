<?php

//namespace work;
session_start();
$_SESSION['user'] = 'stepan';
$_SESSION['password'] = 'Qwertyuiop12';


include ("Registration.php");



interface AuthorizationInterface{
    function isName();
    function isPassword();
    function isCheckbox();
    function autorisated();
}

class Autorization extends Base implements AuthorizationInterface{
    public $user;
    public $password;
    public function __construct($user, $password)
    {
        $this->password = $password;
        $this->user = $user;
    }
    function isName(){
        if ($_SESSION['user'] == $_POST['user']){
            return true;
        }
    }
    function isPassword(){
        if ($_SESSION['password'] == $_POST['password']){
            return true;
        }
    }
    function autorisated()
    {
        if ($this->isPassword() && $this->isName()){
            header('Location: http://example.palmo/Welcome.php');
        }
    }

    function isCheckbox(){
        if (isset($_POST['checkbox'])) {
                setcookie('user', $_POST['user']);
                setcookie('password', $_POST['password']);
        }

    }
}
$user1 = new Autorization($_POST['user'], $_POST['password']);
$user1->autorisated();




?>
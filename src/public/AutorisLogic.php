<?php
include ("Registration.php");

interface AuthorizationInterface{
    function isName();
    function isPassword();
    function autorisated();
}

class Autorization extends Base implements AuthorizationInterface{
    public $userName;
    public $password;
    public function __construct($userName, $password)
    {
        $this->password = $password;
        $this->userName = $userName;
    }
    function isName(){
        if ($_SESSION['userName'] == $_POST['userName']){
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
    function wel(){
        header('Location: http://example.palmo/Welcome.php');
    }
}
$user = new Autorization('$userName', '$password');
//$user->autorisated();
$user->wel();

?>
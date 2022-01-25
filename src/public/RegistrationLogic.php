<?php
include ("Registration.php");
interface RegistrationInterface{
    function isName();
    function checkPassword();
    function isPassword();
    function repeatPassword();
    function checkEmail();
    function isEmail();
    function isChechbox();
    function checkImage();

}

class NewUser extends Base implements RegistrationInterface {
    public $name;
    public $password;
    public $repeatPassword;
    public $email;
    public function __construct($name, $password, $repeatPassword,$email)
    {
        $this->name = $name;
        $this->password = $password;
        $this->repeatPassword = $repeatPassword;
        $this->email = $email;
    }
    function isName(){
        if (!$_POST['userName'] || strlen($_POST['userName']) < 5 ) {
            echo 'Логин должен быть не менее 5 символов';
            return false;
        }
        return true;
    }
    function checkPassword()
    {
        preg_match("/^[A-Z]/", $_POST['password'], $A);
        preg_match('#^[0-9]+$#', $_POST['password'], $A1);
        if ($A >=1 && $A1 >=1){

            return true;
        }
        echo 'Пароль должен содержать хотябы 1 цыфру и 1 заглавную букву';
        return false;
    }


    function isPassword(){
        if (!$_POST['password'] || strlen($_POST['password']) < 10 || !$this->checkPassword()){
            echo 'Пароль должен быть не менее 10 символов';
            return false;
        }
        return true;
    }
    function repeatPassword(){
        if ($_POST['password_confirm'] !== $_POST['password']){
            echo 'Повтор пароля не верный';
            return false;
        }
        return true;
    }
    function checkEmail()
    {
        preg_match("/^[@]/", $_POST['email'], $E);
        if (!$E < 1){
            echo 'Email введен не верно'.  '</br>';
            return false;
        }
        return true;
    }

    function isEmail(){
        if (!$_POST['email'] || !$this->checkEmail()){
            echo 'Email введен не верно'.  '</br>';
            return false;

        }
        return true;
    }
    function welcome(){
        if($this->isName() && $this->repeatPassword() && $this->isEmail() && $this->isPassword()){
            header('Location: http://example.palmo/Welcome.php');
        }
        echo 'Введенные данные не соответствуют требованиям';
    }
    function isChechbox(){
        if (isset($_POST['checkbox'])){
            setcookie('userName', $_POST['userName']);
            setcookie('email', $_POST['email']);
        }
    }

    function checkImage(){
        if (isset($_FILES['your_file'])){
            $types = array('image/gif', 'image/png', 'image/jpeg', 'image/pjpeg');
        if (!in_array($_FILES['your_file']['type'], $types)){
        echo 'Загружаемый файл не является изображением';
        return false;
        }
            $current_path = $_FILES['your_file']['tmp_name'];
            $filename = $_FILES['your_file']['name'];
            $new_path = dirname(__FILE__. '/' . $filename);
            move_uploaded_file($current_path,$new_path);
        }
        echo 'картинка загружена';
        return  true;
    }


}
$a = new NewUser($_POST['userName'], $_POST['password'] ,$_POST['password_confirm'], $_POST['email']);
$a->isName();
$a->checkPassword();
$a->isPassword();
$a->repeatPassword();
$a->checkEmail();
$a->isEmail();
$a->welcome();
$a->isChechbox();
$a->checkImage();
var_dump($a->checkImage());
?>

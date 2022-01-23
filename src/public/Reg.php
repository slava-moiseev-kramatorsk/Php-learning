<?php
//namespace work;
//?>
    <h1>Введите данные</h1>
<form name="feedback" method="post" action="Reg.php">
    <label>Имя <input type="text" name="userName"></label>
    <label>Пароль <input type="password" name="password"></label>
    <label>Повторите пароль <input type="password" name="password_confirm"></label>
    <label>Электронная почта<input type="email" name="email"></label>
    <label>Запомнитьменя<input type="checkbox"  name="checkbox" value=""></label>

    <label><input type="submit" name="pub" value="Отправить" </label>
</form>

<form name="feedback" method="post" action="PostNews.php" enctype="multipart/form-data">
    <label>Загрузить файл <input type="file" name="yourFile"></label>

</form>

<?php
include ("Registration.php");
interface RegistrationInterface{
    function isName();
    function checkPassword();
    function isPassword();
    function repeatPassword();
    function checkEmail();
    function isEmail();

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
        } else if ($_POST['userName']){
            return $this->name;
        }
    }
    function checkPassword()
    {
        preg_match("/^[A-Z]/", $_POST['password'], $A);
        preg_match('#^[0-9]+$#', $_POST['password'], $A1);
        if ($A < 1){
            return false;
        }
        if ($A1 < 1){
            return false;
        } else return true;
    }

    function isPassword(){
        if (!$_POST['password'] || strlen($_POST['password']) < 10 || !$this->checkPassword()){
            echo 'Пароль должен быть не менее 10 символов';
        }
        return false;
    }
    function repeatPassword(){
        if ($_POST['password_confirm'] !== $_POST['password']){
            echo 'Повтор пароля не верный';
            return false;
        }
    }
    function checkEmail()
    {
        preg_match("/^[@]/", $_POST['email'], $E);
        if (!$E){
            return false;
        }
    }

    function isEmail(){
        if (!$_POST['email'] || !$this->checkEmail()){
            return false;
        }
    }
    function welcome(){
        if($this->isName() && $this->repeatPassword() && $this->isEmail() && $this->isPassword()){
            header('Location: http://example.palmo/Welcome.php');
        }
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
?>
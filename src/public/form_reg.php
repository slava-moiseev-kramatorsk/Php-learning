<?php
session_start();
$_SESSION['name'] = $_POST['new_name'];
$_SESSION['password'] = $_POST['new_password'];
setcookie('new_name', $_POST['new_name']);
setcookie('phone', $_POST['phone']);

if (isset($_POST)){
    if(!$_POST['new_name'] || !$_POST['new_password'] || !$_POST['repeat_password'] || !$_POST['phone']){
        echo 'Ввод не корректен';
    }
    if (is_numeric($_POST['phone']) && strlen($_POST['phone']) != 10){
        echo 'Номер телефона должен содержать 10 цифр';
    }
    if ($_POST['new_password'] !== $_POST['repeat_password']){
        echo 'Повтор пароля не верный';
    }
    header('Location: http://example.palmo/home.php');



}
<?php

session_start();
$_SESSION['name'] = 'slava';
$_SESSION['password'] = 'palmo';
setcookie('name', $_POST['name']);
setcookie('password', $_POST['password']);


if (isset($_POST)){
    if($_SESSION['name'] == $_POST['name'] && $_SESSION['password'] === $_POST['password']){
        header('Location: http://example.palmo/home.php');
    } else
        header('Location: http://example.palmo/index.php');
    if($_POST['reg']){
        header('Location: http://example.palmo/reg.php');
    }

}

?>
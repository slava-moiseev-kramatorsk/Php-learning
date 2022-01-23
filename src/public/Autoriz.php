<?php
//namespace work;
session_start();
$_SESSION['userName'] = 'stepan';
$_SESSION['password'] = 'Qwertyuiop12'

//?>
<h1>Авторизируйтесь</h1>

<form name="feedback" method="post" action="AutorisLogic.php">
    <label>Имя <input type="text" name="nameOfNews"></label>
    <label>Пароль <input type="password" name="password"></label>
    <input type="submit" value="Войти">

<?php

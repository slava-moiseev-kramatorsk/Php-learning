<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
    <form name="feedback" method="post" action="form.php"
    <label>Логин: <input type="text" name="name" value="<?php echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''?>"></label>
    <label>Пароль: <input type="text" name="password" value="<?php echo isset($_COOKIE['password']) ? $_COOKIE['password'] : ''?>"</label>
    <input type="submit" name="send" value="Войти"</br>

<!--           <form name="registration" method="post" action="reg.php"-->
    <input type="submit" name="reg" value="Региствация"
</head>

<body style="margin: 0;">

<!-- Add your site or application content here -->
<main style="display: flex; justify-content:center; margin-top: 25px;">
    <!--    <img src="palmo.jpg" alt="">-->
    <?php

    ?>

</main>

</body>

</html>
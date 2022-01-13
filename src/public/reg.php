<form name="feedback" method="post" action="form_reg.php"
<label>Ваше имя: <input type="text" name="new_name" value="<?php echo isset($_COOKIE['new_name']) ? $_COOKIE['new_name'] : ''?>"></label>
<label>Пароль: <input type="text" name="new_password"</label>
<label> Повторите пароль: <input type="text" name="repeat_password"</label>
<label>Ваш номер телефона: <input type="number" name="phone" value="<?php echo isset($_COOKIE['phone']) ? $_COOKIE['phone'] : ''?>"</label>
<input type="submit" name="send" value="Зарегестрироватся">


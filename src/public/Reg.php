<?php
//namespace work;
//?>
    <h1>Введите данные</h1>
<form name="feedback" method="post" action="RegistrationLogic.php" enctype="multipart/form-data">
    <label>Имя <input type="text" name="userName"></label>
    <label>Пароль <input type="password" name="password"></label>
    <label>Повторите пароль <input type="password" name="password_confirm"></label>
    <label>Электронная почта<input type="email" name="email"value="<?php echo isset($_COOKIE['email']) ? $_COOKIE['email'] : ''?>"></label>
    <label>Запомнитьменя<input type="checkbox"  name="checkbox" value=""></label>

    <label><input type="submit" name="pub" value="Отправить" </label>

        <label>Файл<input type="file" name="your_file">
            <input type="submit" name="send" value="Отправить файл">

</form>

<?php

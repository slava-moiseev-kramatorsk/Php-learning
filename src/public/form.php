<?php
session_start();
$_SESSION['name'] = $_POST['new_name'];
$_SESSION['password'] = $_POST['new_password'];
setcookie('new_name', $_POST['new_name']);
setcookie('phone', $_POST['phone']);


if (isset($_FILES['your_file'])){
    $current_path = $_FILES['your_file']['tmp_name'];
    $filename = $_FILES['your_file']['name'];
    $new_path = dirname(__FILE__. '/' . $filename);
    move_uploaded_file($current_path,$filename);

    $file1_content = file_get_contents($filename);
    print_r($file1_content).'</br>';
}


if (isset($_POST)){
if(!$_POST['new_name'] || !$_POST['new_password'] || !$_POST['repeat_password'] || !$_POST['phone']){
    echo 'Ввод не корректен';
}
if (is_numeric($_POST['phone']) && strlen($_POST['phone']) != 10){
    echo 'Номер телефона должен содержать 10 цифр';
}
if ($_POST['new_password'] !== $_POST['repeat_password']) {
    echo 'Повтор пароля не верный';
}
    echo 'Ваши данные сохранены';
}
$userInfo = fopen('users.txt', 'w+' );
fwrite($userInfo, isset($_COOKIE['new_name']) ? $_COOKIE['new_name'] : ''. PHP_EOL) ;
fwrite($userInfo, isset($_COOKIE['phone']) ? $_COOKIE['phone'] : ''. PHP_EOL);
$text = file_get_contents('users.txt');
echo $text;

function cleaner ($dir){
    if (is_file($dir) && (filesize($dir)) > 1024){
        unlink($dir);
    }
}
?>

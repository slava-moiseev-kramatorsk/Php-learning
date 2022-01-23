<?php


session_start();


$today = date("H:i:s");

if (isset($_POST)) {
    if (!$_POST['nameOfNews'] || !$_POST['shortNews'] || !$_POST['bodyOfNews'] || !$_POST['autor']){
        echo 'Ввод не верен';
    } else {
        setcookie('nameOfNews', $_POST['nameOfNews'], time() + 3600);
        setcookie('autor', $_POST['autor'], time() + 3600);
    }

     if (strlen($_POST['shortNews']) < 20) {
         echo 'Описание слабовато';
     } else {
         setcookie('shortNews', $_POST['shortNews'], time() + 3600);
     }
     if (strlen($_POST['bodyOfNews']) < 10) {
         echo 'Содержание новости менее 10 символов';
     } else {
         setcookie('bodyOfNews', $_POST['bodyOfNews'], time() + 3600);
     }
     if (!$_POST['realDate']) {
         setcookie("realDate", $today, time() + 3600);
     }
 }
if (isset($_FILES['your_file'])) {
    $current_path = $_FILES['yourFile']['tmp_name'];
    $filename = $_FILES['yourFile']['name'];
    $new_path = dirname(FILE . '/' . $filename);
    move_uploaded_file($current_path, $filename);
}
if ($_POST['pub']) {
    header('Location: http://example.palmo/newsList.php');
}


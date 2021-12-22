<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 0;">

<!-- Add your site or application content here -->
<main style="display: flex; justify-content:center; margin-top: 25px;">
    <?php

   // 1. Создать переменную $name и задать ей значение с именем, результат вывести на страницу с помощью echo;
    $name = 'slava';
    echo $name.'<br>' ;
    //2. Создать две переменные $а = 8 и $b = 1, вывести на страницу результаты основных математических операций (+ - / * и остаток от деления (%));
    $a = 8;
    $b = 1;
    echo ($a + $b).'<br>';
    echo ($a - $b).'<br>';
    echo ($a / $b).'<br>';
    echo ($a * $b).'<br>';
    echo ($a % $b).'<br>';
    //3. Создайте переменную $number = 5, в переменную $result запишите значение $number в 3 степени. Результат выведите на экран.
    $number = 5;
    $result = pow($number,3);
    echo $result.'<br>';

    //4. Внесите в переменную $age ваш возраст. Если возраст в пределах от 18 до 60 лет, то выведите на экран сообщение "Вам ещё работать и работать";
    $age = 32;
    if( $age > 18 && $age < 60 ){
        echo 'Вам еще работать и работать !'.'<br>';
    }

    //5. Расширьте задачу 4. Если возраст меньше 18 или больше 60, то вывести сообщения "Вам ещё рано работать" и "Пора на отдых" соответственно;
    if( $age <18 ){
        echo 'Вам еще рано работать'.'<br>';
    } else {
        echo 'Пора на отдых'.'<br>';
    }
    //6. Создайте переменную $dayNumber с номером для недели. Если номер дня в пределах от 1 до 5 то вывести сообщение "Это рабочий день", если 6-7 то "Это выходной", если значение $dayNumber не в пределах 1-7 то вывести сообщение об ошибке;
    $dayNumber = 8;
    if($dayNumber >= 1 && $dayNumber <= 5){
        echo 'Это рабочий день'.'<br>';
    } else if($dayNumber >= 6 && $dayNumber <= 7){
        echo 'Это выходной'.'<br>';
    } else {
        echo 'Error'.'<br>';
    }

    //7. Объявите константу DAYS_COUNT равную 7 и константу MONTH_COUNT равную 12 двумя разными способами объявления констант. Выведите значение констант на страницу;
    define('DAYS_COUNT', 7);
    const MONTH_COUNT = 12;
    echo MONTH_COUNT.'<br>';
    echo DAYS_COUNT.'<br>';

    //8. Создайте две переменные с целыми числами. Если переменные равны друг другу, то вывести сообщение "Сумма чисел равна" и сумму чисел, если нет, то "Разница чисел равна" и разницу соответственно;
    $num1 = 3;
    $num2 = 3;
    if($num1 === $num2){
        echo 'Сумма чисел равна '.($num1 + $num2).'<br>';
    } else
        echo 'Разница чисел равна '.($num1 - $num2).'<br>';

    //9. Создайте переменную с случайным числом от 1 до 100. Выведите число на страницу и сделайте проверку его на кратность, результат проверки так же вывести на экран;
    $random = rand(1,100);
    echo $random.'<br>';
    if($random % 2){
        echo 'Число не кратно 2'.'<br>';
    } else
        echo 'Число кратно 2'.'<br>';
    ?>

</main>

<?php
    phpinfo()
?>
</body>

</html>
<?php
phpinfo();

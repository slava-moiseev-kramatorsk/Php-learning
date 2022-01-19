<!doctype html>
<html class="no-js" lang="">

<!--netstat -tulpn | grep --color :80 проверка свободен ли порт.-->

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
    <!--    <img src="palmo.jpg" alt="">-->
    <form name="file_upload" method="post" action="form.php" enctype="multipart/form-data">
    <label>Файл<input type="file" name="your_file">
        <input type="submit" name="send" value="Отправить файл">

        <form name="feedback" method="post" action="form.php"
        <label>Ваше имя: <input type="text" name="new_name" value="<?php echo isset($_COOKIE['new_name']) ? $_COOKIE['new_name'] : ''?>"></label>
        <label>Пароль: <input type="text" name="new_password"</label>
        <label> Повторите пароль: <input type="text" name="repeat_password"</label>
        <label>Ваш номер телефона: <input type="number" name="phone" value="<?php echo isset($_COOKIE['phone']) ? $_COOKIE['phone'] : ''?>"</label>
        <input type="submit" name="send" value="Зарегестрироватся">
    <?php


    $arr = ['яблоко','груша','арбуз','малина','клубника','виноград','киви','слива','банан','мандарин'];
    $file1 = fopen('fruits.txt', 'w+' );
    natsort($arr);      // сортирует
//    print_r($arr);
    for($i = 0; $i < count($arr); $i++){
          fwrite($file1, $arr[$i]. PHP_EOL);     // записывает не отсортированный, падло. Почему ?
    }


//    class Calc {
//        protected $param1;
//        protected $param2;
//
//        public function __construct($param1, $param2)
//        {
//            $this->param1 = $param1;
//            $this->param2 = $param2;
//        }
//        function plus(){
//            echo $this->param1 + $this->param2 .'</br>';
//        }
//        function minus(){
//            echo $this->param1 - $this->param2.'</br>';
//        }
//        function pow (){
//            echo $this->param1 * $this->param2.'</br>';
//        }
//        function delim (){
//            echo $this->param1 / $this->param2.'</br>';
//        }
//
//    }
//    class Pow extends Calc{
//
//        function powSqr(){
//            echo $this->pow();
//        }
//    }
//
//    $a = new Calc(1,2);
//    $a->plus();
//    $a->minus();
//    $a->pow();
//    $a->delim();
//    $b = new Pow(2,2);
//    $b->pow();
//    $b->powSqr();
//
//    class Worker {
//        public $name;
//        public $age;
//        public $salary;
//
//        public function __construct($name, $age, $salary)
//        {
//            $this->name = $name;
//            $this->age = $age;
//            $this->salary = $salary;
//        }
//        function getSalary(){
//            return $this->salary;
//        }
//        function getAge(){
//            return $this->age;
//        }
//
//    }
//    $worker1 = new Worker('Иван', 25, 100);
//    $worker2 = new Worker('Вася',26,200);
//    echo (int)$worker1->getSalary() + (int)$worker2->getSalary().'</br>';
//    echo $worker1->getAge() + $worker2->getAge().'</br>';
    ?>

</main>

</body>

</html>
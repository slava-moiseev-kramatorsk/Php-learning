

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
    <form name="feedback" method="post" action="CreateNews.php">
        <input type="submit" name="create" value="Создать новость">
        <input type="submit" name="view" value="Посмотреть новости">
        <a> </a>
    </form>

<!--    netstat -tulpn | grep --color :80-->
</head>
<!--// echo isset($_COOKIE['name']) ? $_COOKIE['name'] : ''-->
<body style="margin: 0;">

<!-- Add your site or application content here -->
<main style="display: flex; justify-content:center; margin-top: 25px;">
    <!--    <img src="palmo.jpg" alt="">-->
    <?php


    //        class Calc {
    //        protected $param1;
    //        protected $param2;
    //
    //        public function __construct($param1, $param2)
    //    {
    //        $this->param1 = $param1;
    //        $this->param2 = $param2;
    //    }
    //        function plus(){
    //        echo $this->param1 + $this->param2 .'</br>';
    //    }
    //    function minus(){
    //        echo $this->param1 - $this->param2.'</br>';
    //    }
    //    function pow (){
    //        echo $this->param1 * $this->param2.'</br>';
    //    }
    //    function delim (){
    //        echo $this->param1 / $this->param2.'</br>';
    //}
    //
    //}
    //    class Pow extends Calc{
    //
    //            function powSqr(){
    //               echo $this->pow();
    //            }
    //    }
    //
    //$a = new Calc(1,2);
    //    $a->plus();
    //    $a->minus();
    //    $a->pow();
    //    $a->delim();
    //    $b = new Pow(2,2);
    //    $b->pow();
    //    $b->powSqr();
    //
    //    class Worker {
    //         public $name;
    //         public $age;
    //         public $salary;
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
    //     echo (int)$worker1->getSalary() + (int)$worker2->getSalary().'</br>';
    //    echo $worker1->getAge() + $worker2->getAge().'</br>';


//    include ("blog/page.php");
//    include ("news/page.php");
//
//
//    use blog\Page as Blog;
//    use news\Page as News;
//
//    $blog = new Blog();
//    $news = new News();
//    $blog->loadPage();
//    $news->loadPage();
//    abstract class User{
//        public string $name;
//        public function setName($name)
//        {
//             $this->name = $name;
//             echo $name;
//        }
//       abstract function showRole();
//
//        function getName(){
//            echo $this->name;
//        }
////        function setName(){
////           return  $this->name ;
////        }
//    }
//
//    class Admin extends User {
//        public string $name;
//        public function __constructor($name)
//        {
//            parent::__constructor($name);
//        }
//
//        function showRole()
//        {
//            echo 'Admin'.'</br>';
//        }
//
//    }
//
//    class Visitor extends Admin{
//        function showRole()
//        {
//           echo 'Visitor'.'</br>';
//        }
//    }
//    $admin = new Admin();
//    $admin->showRole();
//    $admin->setName('Stepan');
//
//    $visitor = new Visitor();
//    $visitor->showRole();
//    $visitor->setName('Vasil');
//
//
//
//    interface Count{
//        function count();
//    }
//    class Sun implements Count{
//        public int $x;
//        public int $y;
//        public function __construct($x, $y)
//        {
//            $this->x = $x;
//            $this->y = $y;
//        }
//        public function count()
//        {
//           echo $this->x + $this->y;
//        }
//    }
//    class Multiply implements Count{
//        public int $x;
//        public int $y;
//        public function __construct($x, $y)
//        {
//            $this->x = $x;
//            $this->y = $y;
//        }
//        public function count()
//        {
//            echo $this->x * $this->y;
//        }
//    }
//    $summ = new Sun(1,2);
//    $summ->count();
//    $mult = new Multiply(2,3);
//    $mult->count();
//
//
    ?>

</main>

</body>

</html>
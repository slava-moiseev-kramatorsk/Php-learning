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

   class Figure{
       protected $type;
       function getType(){
           return $this->type;
       }
       function square(){}
       function perimeter(){}
   }
   class Circle extends Figure {
       protected $rad;
       public function __construct($rad)
       {
           $this->rad = $rad;
       }
       function square(){
           echo 'площадь : '. 3.14 *($this->rad**2). ', ';
       }
       function perimeter(){
           echo 'периметр : ' . 3.14 *($this->rad*2). '</br>';
       }
       function getType(){
           echo 'Фигура : круг, ';
       }

   }

    class Triangle extends Figure{
        protected $a;
        protected $b;
        protected $c;
        public function __construct($a, $b, $c)
        {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        function getType()
        {
            echo 'Фигура : треугольник, ';
        }
        function square(){
            echo 'площадь : '. 0.5 *($this->a * $this->b) . ', ';    // прямоугольный треугольник
        }
        function perimeter(){
            echo 'периметр : ' . ($this->a + $this->b + $this->c) . '</br>';
        }

    }

    class Square extends Figure{
        protected $height;
        public function __construct($height)
        {
            $this->height = $height;
        }

        function square()
        {
            echo 'площадь : '. $this->height**2 . ', ';
        }
        function getType()
        {
            echo  'Фигура : квадрат, ';
        }
        function perimeter(){
            echo 'периметр : ' .  $this->height * 4 . '</br>';
        }
    }

    $cirl = new Circle(3);
   $cirl->getType();
   $cirl->square();
   $cirl->perimeter();

   $triang = new Triangle(3,4,5);
   $triang->getType();
   $triang->square();
   $triang->perimeter();

   $squar = new Square(5);
   $squar->getType();
   $squar->square();
   $squar->perimeter();


    ?>

</main>

<?php

?>
</body>

</html>
<?php


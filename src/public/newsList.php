
<?php

$name = isset($_COOKIE['nameOfNews']) ? $_COOKIE['nameOfNews'] : '';
echo $name . '</br>';
$News[] = $_COOKIE;
//print_r($News). '</br>';
//echo json_encode($News). '</br>';
$jso = json_encode($News);
//print_r(json_decode($jso)). '</br>';
//setcookie($_COOKIE['nameOfNews'], $jso, time() + 36000);

?>
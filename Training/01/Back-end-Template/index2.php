<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

//$num1 = $_POST['num1'];
//$num2 = $_POST['num2'];


$result = $num1 + $num2;

header("Location:http://localhost/index/index.php?result=$result");
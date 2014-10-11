<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP比较运算符</title>
</head>
<body>
<?php
$x = 100;
$y = "100";

var_dump($x == $y); // 因为值相等，返回true
echo "<br>";
var_dump($x === $y); // 因为类型不相等，返回false
echo "<br>";
var_dump($x != $y); // 因为值相等，返回false
echo "<br>";
var_dump($x !== $y); // 因为值相等，类型不相等，返回true
echo "<br>";

$a = 50;
$b = 90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>
</body>
</html>

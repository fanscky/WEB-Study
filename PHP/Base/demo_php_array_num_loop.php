<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>遍历索引数组</title>
</head>
<body>
<?php
$cars = array("Volvo", "BMW", "SAAB");
$arrlength = count($cars);

for ($x=0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
</body>
</html>

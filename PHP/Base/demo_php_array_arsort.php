<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>根据值对数组进行降序排序 - arsort()</title>
</head>
<body>
    <?php
$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");
arsort($age);

foreach($age as $x=>$x_value)
    {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
    }
    ?>
</body>
</html>

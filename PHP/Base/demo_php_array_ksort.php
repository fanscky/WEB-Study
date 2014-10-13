<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>根据键对数组进行升序排序 - ksort()</title>
</head>
<body>
    <?php
    $age=array("Bill"=>"35", "Steve"=>"37","Peter"=>"43");
    ksort($age);
    foreach ($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
    ?>
</body>
</html>

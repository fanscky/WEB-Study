<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>数字降序</title>
</head>
<body>
<?php
$numbers = array(3, 5, 1, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>
</body>
</html>

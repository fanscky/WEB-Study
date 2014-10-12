<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>字母降序</title>
</head>
<body>
    <?php
$cars = array("Volvo", "BMW", "SAAB");
rsort($cars);

$clength = count($cars);
for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
</body>
</html>

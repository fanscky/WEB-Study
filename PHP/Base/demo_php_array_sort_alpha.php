<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>按照字母升序</title>
</head>
<body>
<?php
$cars = array("Volvo", "BMW", "SABB");
sort($cars);

$clength = count($cars);
for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>
</body>
</html>

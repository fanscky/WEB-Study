<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 两个函数参数</title>
</head>
<body>
<?php
function familyName($fname, $year)
{
    echo "$fname Zhang. Born in $year <br>";
}

familyName("Li", "1975");
familyName("Hong", "1978");
familyName("tao", "1983")
?>
</body>
</html>

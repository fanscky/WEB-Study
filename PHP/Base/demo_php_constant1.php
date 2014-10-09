<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置PHP常量</title>
</head>
<body>
<?php
// 定义对大小写敏感的常量
define("GREETING", "Welcome to W3School.com.cn!");
echo GREETING;
echo "<br>";
// 不会输出常量的值
echo greeting;
?>
</body>
</html>

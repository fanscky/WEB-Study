<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>对大小写不敏感的常量</title>
</head>
<body>
<?php
// 定义对大小写不敏感的常量
define("GREETING", "Welcome to W3School.com.cn!",true);
echo GREETING;
echo "<br>";
// 会输出常量的值
echo greeting;
?>
</body>
</html>

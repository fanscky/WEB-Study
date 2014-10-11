<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP 默认参数值</title>
</head>
<body>
<?php
function setHeight($minheigh=50)
{
    echo "高度是：$minheigh <br>";
}

setHeight(350);
setHeight();
setHeight(135);
setHeight(80);
?>
</body>
</html>

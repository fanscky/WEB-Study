<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>$GLOBALS — 引用全局作用域中可用的全部变量</title>
</head>
<body>
    <?php
    $x = 30;
    $y = 65;

    function addition()
    {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;
    ?>
</body>
</html>

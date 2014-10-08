<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>变量作用域</title>
</head>
<body>
    <?php
    $x=5; // global scope;
    function myTest() {
        $y=10;  // local scope;
        echo "<p>在函数内部测试变量：</p>";
        echo "变量 x 是： $x";
        echo "<br>";
        echo "变量 y 是： $y";
    }

    myTest();

    echo "<p>在函数之外测试变量</p>";
    echo "变量 x 是： $x";
    echo "<br>";
    echo "变量 y 是： $y";
?>    
</body>
</html>


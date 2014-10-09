<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>PHP static 关键词</title>
</head>
<body>
    <?php
    function myTest() {
        static $x=0;
        echo $x;
        $x++;
    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
?>
</body>
</html>

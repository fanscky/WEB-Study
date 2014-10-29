<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>异常的基本使用</title>
</head>
<body>
    <?php
    // create function with an exception
    function checkNum($number)
    {
        if ($number > 1) {
            throw new Exception("Value must be 1 or below");
        }
        return true;
    }

    // trigger exception
    checkNum(2);
    ?>
</body>
</html>

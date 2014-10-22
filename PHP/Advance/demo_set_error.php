<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置错误处理程序</title>
</head>
<body>
    <?php
        // error handler function
        function customError($errno, $errstr)
        {
            echo "<b>Error:</b> [$errno] $errstr";
        }

        // set error handler
        set_error_handler("customError");

        // trigger error
        echo($test);
    ?>
</body>
</html>

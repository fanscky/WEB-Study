<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>设置顶层异常处理器</title>
</head>
<body>
<?php
/**
 *
 * @authors CaiKaiye (caikaiye@ruijie.com.cn)
 * @date    2014-10-29 10:56:47
 * @version $Id$
 */
function myException($exception)
{
    echo "<b>exception:</b>", $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception("Uncaught exception occured");
?>
</body>
</html>

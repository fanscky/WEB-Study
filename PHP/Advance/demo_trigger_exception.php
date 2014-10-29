<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>触发一个异常</title>
</head>
<body>
    <?php 
        // create function with an exception
        function checkNum($number)
        {
            if ($number > 1) {
                throw new Exception("Vaule must be 1 or below");                
            }

            return true;
        }

        // trigger exception in a "try" block
        try
        {
            checkNum(2);
            //if the exception is throw, this text will not be shown
            echo 'If you see this, the number is 1 or below';
        }

        // catch exception
        catch (Exception $e)
        {
            echo 'Message: ' .$e->getMessage();
        }
    ?>
</body>
</html>

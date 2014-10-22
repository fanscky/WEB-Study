<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>触发错误</title>
</head>
<body>
    <?php
    $test = 2;
    if ($test > 1) {
        trigger_error("Value must be 1 or below");
    }
    ?>
</body>
</html>

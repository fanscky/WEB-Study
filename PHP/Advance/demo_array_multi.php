<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>多维数组</title>
</head>
<body>
    <?php
    // A two-dimensional array
    $cars = array (
        array ("Volvo", 100, 96),
        array ("BMW", 60, 59),
        array ("Toyota", 110, 100)
    );

    echo $cars[0][0]."：Ordered：".$cars[0][1].". Sold：".$cars[0][2]."<br>";
    echo $cars[1][0]."：Ordered：".$cars[1][1].". Sold：".$cars[1][2]."<br>";
    echo $cars[2][0]."：Ordered：".$cars[2][1].". Sold：".$cars[2][2]."<br>";
    ?>
</body>
</html>

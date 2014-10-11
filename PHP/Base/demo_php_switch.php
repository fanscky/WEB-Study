<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Switch 语句</title>
</head>
<body>
<?php
$favcolor = "blue";

switch ($favcolor) {
    case 'red':
        echo "Your favorite color is red!";
        break;
    case 'blue':
        echo "Your favorite color is blue!";
        break;
    case 'green':
        echo "Your favorite color is green!";
        break;
    
    default:
        echo "Your favorite color is neither red, blue, or green!";
        break;
}
?>
</body>
</html>

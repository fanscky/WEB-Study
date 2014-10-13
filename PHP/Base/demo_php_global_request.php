<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP $_REQUEST</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname">
<input type="submit">
</form>

<?php
$name = $_REQUEST('fname');
echo $name;
?>
</body>
</html>



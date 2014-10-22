<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>错误处理</title>
</head>
<body>
    <?php
if(!file_exists("welcome.txt")) {
    die("File not found");
} else {
    $file=fopen("welcome.txt","r");
    while(!feof($file))
    {
        echo fgets($file) . "<br>";
    }
    fclose($file);
}
?>
</body>
</html>

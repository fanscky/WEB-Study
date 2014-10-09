<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>print打印变量</title>
</head>
<body>
<?php
    $txt1="Learn PHP";
    $txt2="W3School.com.cn";
    $cars=array("Volvo","BWM","SAAB");

    print $txt1;
    print "<br>";
    print "Study PHP at $txt2 <br>";
    print "My car is a {$cars[0]}";
?>
    
</body>
</html>

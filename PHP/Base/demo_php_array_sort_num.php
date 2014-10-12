<!-- /**
 * 
 * @authors CaiKaiye (caikaiye@ruijie.com.cn)
 * @date    2014-10-11 16:48:39
 * @version $Id$
 */
 -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>按照数字升序</title>
</head>
<body>
 <?php
$numbers = array(3, 5, 1, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
?>   
</body>
</html>

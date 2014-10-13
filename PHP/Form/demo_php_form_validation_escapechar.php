<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>表单验证实例</title>
</head>
<body>
    <?php
    // 定义变量并且设置为空值
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>PHP 验证实例</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    姓名：<input type="text" name="name"> <font color="red">*</font>
    <br><br>
    电邮：<input type="text" name="email"> <font color="red">*</font>
    <br><br>
    网址：<input type="text" name="website">
    <br><br>
    评论：<textarea name="comment" row="5" col="40"></textarea>
    <br><br>
    性别：
    <input type="radio" name="gender" value="female">女性
    <input type="radio" name="gender" value="male">男性
    <br><br>
    <input type="submit" name="submit" value="提交">
    </form>

    <?php
    echo "<h2>您的输入：</h2>";
    echo "$name";
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>多个异常</title>
</head>
<body>
<?php
class customException extends exception
{
    public function errorMessage()
    {
        // error message
        $errorMsg = 'Error on line ' . $this->getLine() . ' in ' . $this->getFile() . ':<b>' . $this->getMessage() . '</b> is not a valid E-Mail address';
        return $errorMsg;
    }
}

$email = "someone@example.com";

try {
    // check if
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        //throw exception if email is not valid
        throw new customException($email);
    }
    // check for "example" in mail address
    if (strpos($email, "example") !== FALSE) {
        throw new Exception("email is an example E-Mail");
    }
}

catch(customException $e) {
    echo $e->errorMessage();
}

catch(exception $e) {
    echo $e->getMessage();
}
?>
</body>
</html>

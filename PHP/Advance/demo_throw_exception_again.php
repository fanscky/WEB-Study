<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>重新抛出异常</title>
    </head>
    <body>
        <?php
                /**
                *
                * @authors CaiKaiye (caikaiye@ruijie.com.cn)
                            * @date    2014-10-29 10:33:40
                * @version $Id$
                */
                class customException extends exception
                {
                    public function errorMessage()
                    {
                        // error Message
                        $errorMsg = $this->getMessage().' is not a valid E-Mail address.';
                        return $errorMsg;
                    }
                }
                $email = "someone@example.com";
                try
                {
                    try
                    {
                        // check for "example" in mail address
                        if(strpos($email, "example") !== FALSE)
                        {
                            // throw exception if email is not valid
                            throw new Exception($email);
                        }
                    }
                    catch(Exception $e)
                    {
                        // re-throw exception
                        throw new customException($email);
                    }
                }
                catch(customException $e)
                {
                    // display custom message
                    echo $e->errorMessage();
                }
        ?>
    </body>
</html>

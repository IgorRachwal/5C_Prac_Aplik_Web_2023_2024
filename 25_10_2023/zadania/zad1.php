<?php
    $_COOKIE_name="user";
    $_COOKIE_value="Igor Rachwał";
    setcookie($_COOKIE_name,$_COOKIE_value, time() + (86400*30),"/");
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Imie i nazwisko</title>
</head>
<body>
    <?php
    if(!isset($_COOKIE[$_COOKIE_name])) {
        echo "cookie named" . "its not set!";
    } else {
        echo "Cookie" . $_COOKIE_name . "is set! <br>";
        echo "Value is:" . $_COOKIE($cookie_name);
    }
    ?>
</body>
</html>
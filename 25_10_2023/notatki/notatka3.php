<?php
$_COOKIE_name="user";
$_COOKIE_value="Jan Nowak";
setcookie($_COOKIE_name,$_COOKIE_value, time() + (86400*30),"/");
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$_COOKIE_name])) {
    echo "cookie named" . $_COOKIE_name . "its not set!";
} else {
    echo "Cookie" . $_COOKIE_name . "is set! <br>";
    echo "Value is:" . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
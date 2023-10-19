<!DOCTYPE html>
<html>
<meta charset="utf-8">
        <title> PHP POST </title>
</head>
<body>
    <p>
        <?php
        $zmienna = $_POST['pole1'];
        echo "Wartość pola pole1 z formularza to: $zmienna";
        ?>
        </p>
</body>
</html>
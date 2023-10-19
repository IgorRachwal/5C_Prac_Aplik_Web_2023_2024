<!DOCTYPE html>
<html>
<head>
 <title>Kolory</title>
 <style>
 #wynik {
 height: 50%;
 width: 50%;
 margin: 50px auto;
 border: 2px dashed red;
 text-align: center;
 }
 </style>
</head>
<body>
 <div id="wynik">
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $tlo = $_POST["tlo"];
 $tekst = $_POST["tekst"];
 
 if (preg_match("/^#[0-9a-fA-F]{6}$/", $tlo) && preg_match("/^#[0-9a-fA-F]{6}$/", $tekst)) {
 echo '<p style="color:' . $tekst . '; background-color:' . $tlo . '">Imię i nazwisko: Twoje Imię i Nazwisko</p>';
 } else {
 echo "Błąd: Niepoprawny format kolorów.";
 }
 }
 ?>
 </div>
</body>
</html>
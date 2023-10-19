<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator Kosztu Przejazdu - Wynik</title>
</head>
<body>
 <div id="wynik">
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $kosztBenzyny = $_POST["kosztBenzyny"];
 $iloscKilometrow = $_POST["iloscKilometrow"];
 $srednieSpalanie = $_POST["srednieSpalanie"];
 
 if (is_numeric($kosztBenzyny) && is_numeric($srednieSpalanie)) {
 $kosztPrzejazdu = ($iloscKilometrow / 100) * $srednieSpalanie * $kosztBenzyny;
 
 echo "Koszt benzyny: $kosztBenzyny zł<br>";
 echo "Ilość kilometrów: $iloscKilometrow km<br>";
 echo "Średnie spalanie: $srednieSpalanie l/100km<br>";
 echo "Koszt przejazdu: $kosztPrzejazdu zł";
 } else {
 echo "Błąd: Niepoprawny format danych.";
 }
 }
 ?>
 </div>
</body>
</html>
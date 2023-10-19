<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator kosztu za dowoz pizzy - Wynik</title>
</head>
<body>
 <div id="wynik">
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $odleglosc = $_POST["odleglosc"];
 $ciepla = isset($_POST["ciepla"]) ? true : false;
 
 if (is_numeric($odleglosc) && $odleglosc >= 0) {
 $koszt = $odleglosc * 50; 
 
 if ($ciepla) {
 $koszt += $koszt * 0.15;
 }
 
 echo "Koszt dowozu pizzy wynosi: " . number_format($koszt / 100, 2) . " zł";
 } else {
 echo "Błąd: Niepoprawny format odległości.";
 }
 }
 ?>
 </div>
</body>
</html>
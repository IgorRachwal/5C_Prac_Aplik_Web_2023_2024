<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator Kosztu Przejazdu</title>
</head>
<body>
 <form action="koszt.php" method="post">
 <label for="kosztBenzyny">Koszt benzyny (zł):</label>
 <input type="text" id="kosztBenzyny" name="kosztBenzyny" required pattern="\d+(\.\d{2})?$"><br><br>
 
 <label for="iloscKilometrow">Ilość kilometrów:</label>
 <input type="number" id="iloscKilometrow" name="iloscKilometrow" required><br><br>
 
 <label for="srednieSpalanie">Średnie spalanie (l/100km):</label>
 <input type="text" id="srednieSpalanie" name="srednieSpalanie" required pattern="\d+(\.\d{1,2})?$"><br><br>
 
 <input type="submit" value="Oblicz koszt">
 </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
 <title>Kalkulator kosztu za dowoz pizzy</title>
</head>
<body>
 <form action="pizza.php" method="post">
 <label for="odleglosc">Odległość (km):</label>
 <input type="number" id="odleglosc" name="odleglosc" required><br><br>
 
 <label for="ciepla">Ciepła pizza:</label>
 <input type="checkbox" id="ciepla" name="ciepla"><br><br>
 
 <input type="submit" value="Oblicz koszt dowozu">
 </form>
</body>
</html>
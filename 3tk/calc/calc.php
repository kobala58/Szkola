<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="style.css">
<meta charset="UTF-8">
<title>Kalkulacja</title>
<head>
<body>
<?php
$a = $_POST['a'];
$b = $_POST['b'];
$Suma = $a+$b;
$Roznica = $a-$b;
$Iloczyn = $a*$b;
$Iloraz = $a/$b;
echo<<<END
<a href="index.php">Powrot</a>
</br>

<table border="1" cellpadding="10" cellspacing="0">
<tr> 
	<td>Wartosc a</td> <td>$a</td>
</tr>

<tr> 
	<td>Wartosc b</td> <td>$b</td>
</tr>

<tr> 
	<td>Suma</td> <td>$Suma</td>
</tr>
<tr> 
	<td>Roznica</td> <td>$Roznica</td>
</tr>
<tr> 
	<td>Iloczyn</td> <td>$Iloczyn</td>
</tr>
<tr> 
	<td>Iloraz</td> <td>$Iloraz</td>
</tr>
</table>

END;
?>


</body>
</html>
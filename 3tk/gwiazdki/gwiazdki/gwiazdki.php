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

for( $x = 1; $x <= $a; $x++ ){

for( $z = 1; $z <= $x; $z++ ){
echo '*';	
}
echo "</br>";
}




?>

</body>
</html>
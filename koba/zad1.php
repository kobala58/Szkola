<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8">
<title>PHP kartkówka</title>
</head>
<body>
	<form action="" method="POST">
	
	Pierwsza liczba: <input type='number' name='L1'></br>
	Druga liczba <input type='number' name='L2'></br>
	Trzecia liczba <input type='number' name='L3'></br>
	
	<input type='submit' name='Wyślij'>
	
	</form>
	<?php
	function obliczanie(){
	$a=$_POST['L1'];
	$b=$_POST['L2'];
	$c=$_POST['L3'];
	if ($c==0) return '<font color=red>Dzielna nie moze byc zerem</font>';
	$wynik=($a*$b)/$c;
	return '<div>Wynik wynosi: '.$wynik.'</div>';
	}
	print obliczanie();
	?>
</body>
</html>
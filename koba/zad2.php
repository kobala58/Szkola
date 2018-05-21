<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8">
<title>PHP kartkówka</title>
</head>
<body>
	
	
	<img src="t1.png">
	<form action="" method="POST">
	
	A: <input type='number' name='L1'><?php check('L1')?></br>
	B: <input type='number' name='L2'><?php check('L2')?></br>
	C: <input type='number' name='L3'><?php check('L3')?></br>
	
	<input type='submit' name='Wyślij'>
	
	</form>
	<?php
	function obliczanie(){
	$a=$_POST['L1'];
	$b=$_POST['L2'];
	$c=$_POST['L3'];
	$wynik=(($a*$a)+sqrt($b))/$c;
	return '<div>Wynik wynosi: '.$wynik.'</div>';
	}
	
	function check($temp){
		if ($_POST[$temp]<=0){
			print "<font color=red>Podaj dodatnie wartosci.</font>";
		}
	}
	print obliczanie();
	?>
	
</body>
</html>
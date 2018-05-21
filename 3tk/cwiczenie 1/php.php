<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
 If($a>$b)
 {
	If($a>$c)
	{
	echo ("Warunki zostaly spelnione</br>");
	}
	else
	{
	echo ("Warunki nie zostaly spelnione</br>");
	}
	}
	else
	{
 echo ("Warunki nie zostaly spelnione</br>");
 }
	echo ("</br>Liczba a to: $a </br>Liczba b to: $b </br>Liczba c to: $c");
?>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
      echo("a = $a, b = $b, c = $c<BR>");
       $delta = ($b*$b)-4*$a*$c;
       if ($delta < 0) { 
         echo("Brak miejsc zerowych");
       } elseif ($delta == 0) {
         $x1 = -$b/(2 * $a);
         echo("1 meijsce zerowe $x1");
	   }
        else {
         $x1 = (-$b-sqrt($delta)) / (2*$a);
         $x2 = (-$b+sqrt($delta)) / (2*$a);
         echo("2 miejsca zerowe $x1 i $x2");
	   }
?>
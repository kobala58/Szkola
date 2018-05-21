<?php
$a=$_POST['a'];
$b=$_POST['b'];
$i=$_POST['i'];

if ($i == 1) {
    $suma=$a+$b;
} elseif ($i == 2) {
   $od=$a-$b;
} elseif ($i == 3) {
   $mn=$a*$b;
}
elseif ($i == 4) {
    $dzi=$a/$b;
}

switch ($i) {
    case 1:
       echo("Suma wynosi= $suma") ;
        break;
		case 2:
        echo("Odejmowanie wynosi= $od");
        break;
		case 3:
       echo("Mnozenie wynosi= $mn");
        break;
		case 4:
      echo("Dzielenie wynosi= $dz") ;
        break;
}
?> 
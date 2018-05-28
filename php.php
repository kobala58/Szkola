<?php
$a=$_POST['a'];
$b=$_POST['b'];
$i=$_POST['i'];

function wynik($show){
    echo 'Wynik wynosi: '.$show;
}

switch($i){
    case "dodawanie":
        $score=$a+$b;
        wynik($score);
        break;
    case "odejmowanie":
        $score=$a-$b;
        wynik($score);
        break;
    case "mnozenie":
        $score=$a*$b;
        wynik($score);
        break;
    case "dzielenie":
        $score=$a/$b;
        wynik($score);
        break;
}

?> 
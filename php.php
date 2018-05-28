<?php
$a=$_POST['a'];
$b=$_POST['b'];
$i=$_POST['i'];

function wynik($show){
    echo 'Wynik wynosi: '.$show;
}
function dodawanie($a,$b){
	$score=$a+$b;
    wynik($score);
}
function odejmowanie($a,$b){
	$score=$a-$b;
    wynik($score);
}
function mnozenie($a,$b){
	$score=$a*$b;
    wynik($score);
}
function dzielenie($a,$b){
	$score=$a/$b;
    wynik($score);
}
switch($i){
    case "dodawanie":
        dodawanie($a,$b);
        break;
    case "odejmowanie":
        odejmowanie($a,$b);
        break;
    case "mnozenie":
        mnozenie($a,$b);
        break;
    case "dzielenie":
        dzielenie($a,$b);
        break;
}
?> 
<?php 
//FUNKCJE SPRAWDZIAN

function zmienne_i_wypisywanie(){
    echo "wiek wynosi ";
    $a=31;
    $b=1;
    $wynik=$b+$a;
    echo $wynik."<br />";
}

function if_case(){
    $c=31;
    $d=30;
    $wynik1=$c+$d;
    if($wynik1>60)
	    echo "LOL XD DZIALA"."<br />";
    elseif($wynik=10)
        echo "DUPA";
    else
	    echo "NIE MA";
}

function kolor($kolor){
    switch($kolor){
        case "czerwony":
        print("Kolor  <font color=\"red\">czerwony</font>");
        break;
        case "zielony":
        print("Kolor  <font color=\"green\">zielony</font>");
        break;
        default:
        print("Podano b��dny kolor!");
    }
}

function random($min,$max){
    print(rand($min,$max));
}

function lancuch ($znak,$dlugosc){
	for($i=0;$i<$dlugosc;$i++)
		
	
		print($znak);
	print("<br>");
}

function oblicz_potege()
	{
		if (!isset($_POST['podstawa']) || !isset($_POST['wykladnik'])) return '';
		$podstawa=$_POST['podstawa'];
		$wykladnik=$_POST['wykladnik'];
		if (trim($podstawa)=='' || trim($wykladnik)=='') return 'Wpisz podstawę i wykładnik potęgi';
		if ($wykladnik<=0) return 'Wykładnik potęgi musi być dodatni'; 	
		$wynik= pow($podstawa, $wykladnik);
		return 'Wynik działania wynosi: '.$wynik;
    }
function podstawa_val()
	{
		
		if (isset($_POST['podstawa'])) echo $_POST['podstawa']; else echo '';
	}
	
function wykladnik_val()
	{
		if (isset($_POST['wykladnik'])) echo $_POST['wykladnik']; else echo '';
	}
/*
WYTŁUMACZENIE PEWNYCH ZAGADNIEŃ DLA SIEBIE!
isset --> sprawdza czy zmienna została utworzona.
trim --> Usuwa białe, puste znaki z początku oraz końca ciągu
GET widać w URL a POST NIE WIDAĆ W URL


STRUKTURA HTML + podpinanie php
<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<meta charset="utf-8">
<title>PHP kartkówka</title>
</head>
<body>
	<?php require("NAZWA_PLIKU.php"); ?>
	
	<form action="php.php" method="GET">
	
	Ile masz punktów?: <input type='text' name='punkty'>
	
	<input type='submit' name='Wyślij'>
	
	</form>
</body>
</html>



*/



?>
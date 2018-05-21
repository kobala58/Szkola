<?php
	$a=$_GET['punkty'];
	if ($a>0 && $a<10)
	echo"Ocena niedostateczna ";
else if ($a>=10 && $a<15)
	echo"Ocena dopuszczająca ";
else if ($a>=16 && $a<23)
	echo"Ocena dostateczna ";
else if ($a>=24 && $a<32)
	echo"Ocena dobra ";
else if ($a>=33 && $a<40)
	echo"Ocena bardzo dobra ";
else if ($a>=41 && $a<=45)
	echo"Ocena celująca ";
	?>
	
<?php

	$zinssatz = 6.99;
	$kapital = 21000;
	$laufzeit = 72;
	$rate = 355.15;
	$zinsen;
	$monate = [ 
		1 => 'Januar',
		2 => 'Februar',
		3 => 'Maerz',
		4 => 'April',
		5 => 'Mai',
		6 => 'Juni',
		7 => 'Juli',
		8 => 'August',
		9 => 'September',
		10 => 'Oktober',
		11 => 'November',
		0 => 'Dezember',
	];
	
	for($i=1;$i<=$laufzeit; $i++){
                $monatzahl = ($laufzeit + $i + 8) % 12;
		$zinsen = ($kapital * ($zinssatz/100)/12);
		$kapital = ($kapital + $zinsen) - $rate;
		echo " $i. Rate      " . $monate[$monatzahl] . " = " . round($kapital, 2) . '<br />';	
}
?>
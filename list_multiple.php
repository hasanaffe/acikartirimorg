<?php
	$wahl = $_GET['auswahl'];
	for ($i=0; $i < sizeof($wahl); $i++) {
		$wert = current($wahl);
		echo $wert . "<br />\n";
		next($wahl);
	}
?>
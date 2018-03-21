<?php
	$handle = fopen ("schreibmich.txt", "w");
	$count = fputs ($handle, "Erste Zeile\n");
	echo "Es wurden " . $count . " Zeichen geschrieben.<br />\n";
	
	$count = fputs ($handle, "Zweite Zeile\n");
	echo "Es wurden " . $count . " Zeichen geschrieben.<br />\n";
	
	$count = fputs ($handle, "Dritte Zeile\n");
	echo "Es wurden " . $count . " Zeichen geschrieben.<br />\n";
	
	fclose($handle);
?>
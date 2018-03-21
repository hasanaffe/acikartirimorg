<?php
	$handle = fopen ("schreibmich.txt", "a");
	$count = fputs ($handle, "Naechste Zeile\n");
	echo "Es wurden " . $count . " Zeichen geschrieben.<br />\n";
	
	fclose($handle);
	
?>
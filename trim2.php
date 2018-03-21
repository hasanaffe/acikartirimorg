<?php
	$inhalt = file("liesmich.txt");
	foreach ($inhalt as $zeile) {
		echo $zeile . "<br />\n";
	}
?>
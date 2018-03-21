<?php
	echo "meinCookie hat den Wert: <b>" . $_COOKIE["meinCookie"] . "</b><br />\n";
	$timestamp = time();
	$datum = date("d.m.Y - H:i", $timestamp);
	echo $datum;
?>
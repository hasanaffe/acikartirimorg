<?php
	if($_GET['vorname']) {
		echo "Ihr eingegebener Vorname lautet: " . $_GET['vorname'] . " <br />\n";
	}else{
		echo "Bitte geben Sie Ihren Vornamen ein: <br />\n";
	}

	if($_GET['nachname']) {
		echo "Ihr eingegebener Nachname lautet: " . $_GET['nachname'] . " <br />\n";
	}else{
		echo "Bitte geben Sie Ihren Nachamen ein: <br />\n";
	}
?>
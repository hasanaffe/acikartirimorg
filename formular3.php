<?php
	if(isset($_GET['vorname']) && $_GET['vorname']) {
		echo "Ihr eingegebener Name lautet: " . $_GET['vorname'] . " <br />\n";
	}else{
		echo "Bitte geben Sie Ihren Vornamen ein: <br />\n";
	}
	
	if(isset($_GET['nachname']) && $_GET['nachname']) {
		echo "Ihr eingegebener Nachname lautet: " . $_GET['nachname'] . " <br />\n";
	}else{
		echo "Bitte geben Sie Ihren Nachnamen ein: <br />\n";
	}
?>
<?php
	session_start();
	echo "Sitzung hat begonnen. <br />\n";
	echo "Die Session-ID lautet: <b>" . session_id() . "<b><br />\n";
	
	$_SESSION['user'] = 'Max';
?>

<a href="seite2.php">Nächste Seite</a>
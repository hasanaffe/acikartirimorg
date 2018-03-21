<?php
	session_start();
	echo "Sitzung hat begonnen.<br />\n";
	echo "Die Session-ID lautet: " . session_id() . "<br />\n";
	echo "Die Konstante SID hat den Wert: <b> " . SID . "</b><br />\n";
	$_SESSION['user'] = 'Max';
?>

<a href="seite2.php?<?php echo SID; ?>">Nächste Seite</a>
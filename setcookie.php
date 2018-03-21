<?php
	setcookie("meinCookie", "Inhalt des Cookies", time()+3600);
	echo "Cookiewurde gesendet. <br />\n";
?>

<a href="getcookie.php">Cookie auslesen</a>
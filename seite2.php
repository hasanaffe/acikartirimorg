<?php
	session_start();
	echo "Sitzung <b> " . session_id() . "</b> wird fortgeführt. <br />\n";
	echo "User ist " . $_SESSION['user'] . "<br />\n";
?>
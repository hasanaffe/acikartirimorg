<?php
	$handle = fopen("liesmich.txt", "r");
	while (!feof ($handle)) {
		$line = fgets($handle, 1024);
		echo $line . "<br />\n";
	}
	fclose($handle);
?>
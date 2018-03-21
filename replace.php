<?php
	function replace ($file, $linenumber, $replacement) {
		$original = fopen ($file, "r");
		if (! $original) {
			echo "Kann Datei nicht " . $file . " nicht oeffnen.<br />\n";
			return false;
	}
	
	$tempname = tempnam(dirname($file), "tmp");
	$temphandle = fopen ($tempname, "w");
	if (! $temphandle) {
		echo "Kann keine Temporaerdatei " . $tempname . " erstellen.<br />\n";
		fclose ($original);
		return false;
	}
	
	$counter = 1;
	while (! feof ($original)) {
		$line = fgets ($original);
		if ($counter == $linenumber){
			fputs ($temphandle, $replacement);
		}else{
			fputs ($temphandle, $line);
		}
		$counter++;
	}
	
	fclose ($temphandle);
	fclose ($original);
	
	if (file_exists ($file . ".bak")) {
		if (! unlink ($file . ".bak")) {
			echo "Kann alte Sicherungskopie fuer Datei " . $file . " nicht loeschen.<br />\n";
			return false;
		}
	}
	
	if (!rename ($file, $file . ".bak")) { 
			echo "Kann keine Sicherungskopie für Datei " . 
			  $file . " anlegen.<BR />\n"; 
			return false; 
		  }

	
	if (! rename ($tempname, $file)) {
		echo "Kann Temporaerdatei " . $tempname . " nicht nach " . $file . " umbenennen.<br />\n";
		return false;
		}	
	return true;
	}
	
	if (replace ("inhalt.txt", 2, "Neuer Inhalt von Zeile2\n")) {
		echo "Zeile erfolgreich ersetzt.<br />\n";
	}else{
		echo "Ersetzen fehlgeschlagen.<br />\n";
	}
?>
<?php
	function countFile ($filename) {
		$countername = $filename . ".cnt.txt";
		if (file_exists ($countername)){
			$inhalt = file ($countername);
			
			if ($inhalt == false) {
				echo "Zaehlerdatei " . $countername . " existiert zwar, kann aber nicht gelesen werden.<br />\n";
				return -1;
			}else if (sizeof ($inhalt) == 0){
				$counter = 1;
			}else{
				$counter = (int) $inhalt [0];
				$counter++;
			}
		}else{
			$counter = 1;
		}
		$handle = fopen ($countername, "w");
		if (! $handle) {
			echo "kann Zaehlerdatei " . $countername . " nicht zum Schreiben oeffnen.<br />\n";
			return -1;
		}
		if (! fputs ($handle, $counter . "\n")) {
			echo "Kann in Zaehlerdatei " . $countername ." nicht Schreiben.<br />\n";
			return -1;
		}
		fclose ($handle);
		return $counter;
	}
?>
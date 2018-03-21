<?php 
  if (isset ($_GET['zutaten'])) { 
	$wahl = $_GET['zutaten'];
	for ($i=0; $i < sizeof($wahl); $i++) {
		$wert = current($wahl);
		echo $wert . " bestellt <br />\n";
		next($wahl);
	}
 } else {
	 echo "Keine Zutaten ausgewa&uml;hlt.<br />\n";
 }
?>
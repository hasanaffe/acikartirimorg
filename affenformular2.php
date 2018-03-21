<html>
	<head>
		<title>Affenformular</title></head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
		Vorname:
		<input type="text" name="vorname" value="<?php 
			if (isset ($_GET['vorname']) && $_GET['vorname']) {
				echo $_GET['vorname'];
		} ?>"
		/>		
		<?php	
			if (!isset ($_GET['vorname']) || !$_GET['vorname']) {
			echo "<font color=\"#ff0000\";>Bitte geben Sie Ihren Vornamen ein</font>";
		} ?>
		<br />
		Nachname:
		<input type="text" name="nachname" value="<?php 
			if (isset ($_GET['nachname']) && $_GET['nachname']) {
				echo $_GET['nachname'];
		} ?>" 
		/>
		<?php	
			if (!isset ($_GET['nachname']) || !$_GET['nachname']) {
			echo "<font color=\"#ff0000\";>Bitte geben Sie Ihren Nachnamen ein</font>";
		} ?>
		<br />
		Wohnort:
		<input type="text" name="wohnort" value="<?php 
			if (isset ($_GET['wohnort']) && $_GET['wohnort']) {
				echo $_GET['wohnort'];
		} ?>" 
		/>
		<?php	
			if (!isset ($_GET['wohnort']) || !$_GET['wohnort']) {
			echo "<font color=\"#ff0000\";>Bitte geben Sie Ihren Wohnort ein</font>";
		} ?>
		<br />
		<input type="submit" name="los" value="abschicken">
		</form>
	</body>
</html>
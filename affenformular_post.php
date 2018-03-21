<html>
	<head>
		<title>Affenformular</title></head>
	<body>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		Vorname:
		<input type="text" name="vorname" value="<?php 
			if (isset ($_POST['vorname']) && $_POST['vorname']) {
				echo $_POST['vorname'];
		} ?>"
		/>		
		<?php	
			if (!isset ($_POST['vorname']) || !$_POST['vorname']) {
			echo "<b>Bitte geben Sie Ihren Vornamen ein</b>";
		} ?>
		<br />
		Nachname:
		<input type="text" name="nachname" value="<?php 
			if (isset ($_POST['nachname']) && $_POST['nachname']) {
				echo $_POST['nachname'];
		} ?>" 
		/>
		<?php	
			if (!isset ($_POST['nachname']) || !$_POST['nachname']) {
			echo "<b>Bitte geben Sie Ihren Nachnamen ein</b>";
		} ?>
		<br />
		Wohnort:
		<input type="text" name="wohnort" value="<?php 
			if (isset ($_POST['wohnort']) && $_POST['wohnort']) {
				echo $_POST['wohnort'];
		} ?>" 
		/>
		<?php	
			if (!isset ($_POST['wohnort']) || !$_POST['wohnort']) {
			echo "<b>Bitte geben Sie Ihren Wohnort ein</b>";
		} ?>
		<br />
		<input type="submit" name="los" value="abschicken">
		</form>
	</body>
</html>
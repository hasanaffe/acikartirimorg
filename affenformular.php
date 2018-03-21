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
		 if (! isset($_GET['vorname']) || ! $_GET['vorname']) {
			 echo "Bitte eingeben";
		 } else {
			 echo "ist gu&uuml;ltig";
		 }
		?>
		<br />
		<input type="submit" name="los" value="abschicken">
		</form>
	</body>
</html>
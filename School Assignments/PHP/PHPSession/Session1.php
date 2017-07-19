<!DOCTYPE html>
<html>
<body>
	<?php
		//Uitlezen informatie
		session_start();

		$Keuze = $_SESSION["waarde1"];
		$nieuwsbrief = $_SESSION["waarde2"];
		$Keuze1 = $_SESSION["waarde3"];

	?>
	<form method="post">
		Keuze:
		<select name="Keuze">
			<option value="item1" <?php if($Keuze == "item1") { echo "selected"; } ?>>Item 1</option>
			<option value="item2" <?php if($Keuze == "item2") { echo "selected"; } ?>>Item 2</option>
			<option value="item3" <?php if($Keuze == "item3") { echo "selected"; } ?>>Item 3</option>
		</select> <br/>
		Nieuwsbrief: <input type="checkbox" name="nieuwsbrief" <?php if($nieuwsbrief == true) { echo "checked"; }?>> <br/>
		Keuze 1:
		<input <?php if($Keuze1 == "item1") { echo "checked"; }?> type="radio" name="Keuze1" value="item1">Item 1
		<input <?php if($Keuze1 == "item2") { echo "checked"; }?> type="radio" name="Keuze1" value="item2">Item 2
		<input <?php if($Keuze1 == "item3") { echo "checked"; }?> type="radio" name="Keuze1" value="item3">Item 3 <br/>
		<input type="Submit" value="Submit">

	</form>
</body>
</html>
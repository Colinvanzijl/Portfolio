<!DOCTYPE html>
<html>
<body>
	<?php
		//Checken of er op submit is gedrukt
		// $_SERVER["REQUEST_METHOD"] == "POST"
		if($_POST) {
			session_start();

			echo "<pre>";
				var_dump($_POST);
			echo "</pre>";
			// var_dump($_SESSION);

			$_SESSION["waarde1"] = $_POST["Keuze"];
			$_SESSION["waarde2"] = isset($_POST["nieuwsbrief"]);
			$_SESSION["waarde3"] = $_POST["Keuze1"];

			header("location: Session1.php");
		}


	?>
	<form method="post">
		<select name="Keuze">
			<option value="item1">Item 1</option>
			<option value="item2">Item 2</option>
			<option value="item3">Item 3</option>
		</select> <br/>
		Nieuwsbrief: <input type="checkbox" name="nieuwsbrief"> <br/>
		<input type="radio" name="Keuze1" value="item1">Item 1
		<input type="radio" name="Keuze1" value="item2">Item 2
		<input type="radio" name="Keuze1" value="item3">Item 3 <br/>
		<input type="Submit" value="Submit">

	</form>
</body>
</html>
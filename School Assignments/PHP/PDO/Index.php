<html>
	<?php
	require_once "Country.php";
	require_once "Connect.php";

	$countries = getCountries();


	if($_SERVER["REQUEST_METHOD"] =="POST") {
		$person = $_POST["name"];
		$land = $_POST["country"];
		insertPerson($person, $land);
	}

	//var_dump($countries);
	?>
	<body>
		<form method="post">
		Naam: <input type="text" name="name">
		Land <input type="text" name="landid">
		Submission: <input type="submit">
			<select name="country">
				<?php
					foreach($countries as $country) {
						echo "<option value='$country->id'>$country->CountryName</option>";
						}
				?>
			</select>
		</form>
	</body>
</html>
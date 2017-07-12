<?php

	require_once "Connect.php";

	function getCountries() {
		global $con;

		$statement = $con->prepare("SELECT * FROM country");
		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_OBJ);
	}
	
	function insertPerson($name, $country_id){
		global $con;
		$statement = $con->prepare("INSERT INTO person(name, country_id) VALUES(?, ?)");
		$statement-> bindValue(1,$name);
		$statement-> bindValue(2,$country_id);
		$statement->execute();
	}
?>
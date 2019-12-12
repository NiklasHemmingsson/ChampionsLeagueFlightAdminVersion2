<?php

function connect_db() {

	date_default_timezone_set('Europe/Stockholm');

	// vanliga värden hos er är        root          ""       måste definieras
	// 127.0.0.1 är localhost, användarnamn, lösenord, databasens namn
	$mysqli = new mysqli("mariadb.suni.se", "sh17hp1695", "tour47s", "ht17_1129ME_sh17hp1695");

	if (!$mysqli->set_charset("utf8")) {
    	echo "Error loading character set utf8: %s\n". $mysqli->error;
	} else {
 		//echo "Current character set: %s\n". $mysqli->character_set_name();
	}

	if ($mysqli->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	return $mysqli;
}

function check_credentials($username, $password) {
 if($mysqli = connect_db()) {
 	$sql = "SELECT * FROM kunder WHERE user='".$username."' and password='".$password."'";
 	$result = $mysqli->query($sql);
 	 //print_r($mysqli->error);
 	 if($result->num_rows==1) {
 	 	return $result->fetch_array(); //returnerar användarinformation
 	 } else {
 	 	return false;
 	 }
 }
}


?>

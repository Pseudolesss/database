<?php

	session_start();

	include("connexion.php");

	echo "<a href=\"home.php\"> Back to home page </a> <br />";

	if(isset($_GET['display']))
	    display($_GET['display']);

	if(isset($_GET['reset'])){
		connexion();
		initDatabase();
	}

	


?>
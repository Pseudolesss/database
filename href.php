<?php

	session_start();

	include("connexion.php");

	echo "<a href=\"home.php\"> Back to home page </a> <br />";

	if(isset($_GET['display']))
	    display($_GET['display']);

	if(isset($_GET['reset'])) {
		connexion();
		initDatabase();
	}

	if(isset($_GET['2b'])) {
		connexion();
		mysqli_select_db($_SESSION['link'],$_SESSION['basename']);
		$path = getcwd();
		$sql = file_get_contents("$path/sql/Q2b.sql");
		$result = mysqli_query($_SESSION['link'], $sql);
		if(!$result){
			echo "Error  " . mysqli_error($link);
		}
		direct_display($result); 
	}

	if(isset($_GET['2c'])) {
		connexion();
		mysqli_select_db($_SESSION['link'],$_SESSION['basename']);
		$path = getcwd();
		$sql = file_get_contents("$path/sql/Q2c.sql");
		$result = mysqli_query($_SESSION['link'], $sql);
		if(!$result){
			echo "Error  " . mysqli_error($link);
		}
		direct_display($result); 
	}

	if(isset($_GET['2d'])) {
		
		connexion();
		mysqli_select_db($_SESSION['link'],$_SESSION['basename']);
		$path = getcwd();
		$sql = file_get_contents("$path/sql/Q2d.sql");
		$result = mysqli_query($_SESSION['link'], $sql);
		if(!$result){
			echo "Error  " . mysqli_error($link);
		}
		direct_display($result); 
	
	}





	


?>
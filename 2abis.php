<?php
	session_start();
	$table = $_SESSION['table'];
	$all_property = array();


	echo "<a href=\"home.php\"> Back to home page </a> <br />";

	include("connexion.php");
	connexion();
	mysqli_select_db($_SESSION['link'], $_SESSION['basename']);

		switch ($table) {
			case 'Technicien':

				$result = mysqli_query($_SESSION['link'], "SELECT * FROM $table LIMIT 1");
				while ($property = mysqli_fetch_field($result)) {
				    array_push($all_property, $property->name);  //save those to array
				}

				foreach ($all_property as $bah) {
					echo "$bah <br />";
				}

				break;

			case 'Intervention':
				if(!isset($_POST['n_intervention']) || trim($_POST['n_intervention']) == '')
				{
				   echo "You did not fill out the required fields.";
				}

				if(!isset($_POST['date']) )
				{
				   echo "not set";
				}
				if(trim($_POST['date']) == '')
					echo "empty";

				$result = mysqli_query($_SESSION['link'], "SELECT * FROM $table LIMIT 1");
				while ($property = mysqli_fetch_field($result)) {
				    array_push($all_property, $property->name);  //save those to array
				}

				foreach ($all_property as $bah) {
					echo "$bah <br />";
				}

				break;

			case 'Animal':

				$result = mysqli_query($_SESSION['link'], "SELECT * FROM $table LIMIT 1");
				while ($property = mysqli_fetch_field($result)) {
				    array_push($all_property, $property->name);  //save those to array
				}

				foreach ($all_property as $bah) {
					echo "$bah <br />";
				}

				foreach($_POST as $bah){
					echo "$bah <br />";
				}
			
			default:
				# code...
				break;
		}




?>
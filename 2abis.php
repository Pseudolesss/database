<?php
	session_start();
	$table = $_SESSION['table'];


	echo "<a href=\"home.php\"> Back to home page </a> <br />";

	include("connexion.php");
	connexion();
	$link = $_SESSION['link'];
	$basename = $_SESSION['basename'];
	mysqli_select_db($link, $basename);

		switch ($table) {

			case 'Institution':
				displayProjection(4);
				break;
			case 'Espece':
				displayProjection(3);
				break;
			case 'Climat':
				displayProjection(2);
				break;
			case 'Animal':
				displayProjection(6);
				break;
			case 'Enclos':
				displayProjection(3);
				break;
			case 'Materiel':
				displayProjection(3);
				break;
			case 'Personnel':
				displayProjection(3);
				break;
			case 'Veterinaire':
				displayProjection(3);
				break;
			case 'Technicien':
				displayProjection(1);
				break;
			case 'Intervention':
				displayProjection(6);
				break;
			case 'Entretien':
				displayProjection(5);
				break;
			case 'Provenance':
				displayProjection(3);
				break;
			
			default:
				echo "Error request <br />";
				break;
		}

	function displayProjection($i){

		global $table, $link;
		$setProjection = false;
		$setSelection = false;

		$sql = "SELECT * FROM $table ";
		$buffer1 = "";
		$buffer2 = " ";
		$all_property = array();

		$result = mysqli_query($link, "SELECT * FROM $table LIMIT 0");
		while ($property = mysqli_fetch_field($result)) {
		    array_push($all_property, $property->name);  //save those to array
		}

		// Filling buffer2 (projection)
		$j = 0;
		foreach ($_POST as $var) {
			
			if($j >= $i || !isset($var) || trim($var) == ''){
				$j++;
				continue;
			}

			if(is_string($var)){
				if($setProjection){
					$buffer2 .= "AND $all_property[$j] = '$var' ";
				}
				else{
					$setProjection = true;
					$buffer2 .= "WHERE $all_property[$j] = '$var' ";
				}
			}
			else{
				if($setProjection){
					$buffer2 .= "AND $all_property[$j] = $var ";
				}
				else{
					$setProjection = true;
					$buffer2 .= "WHERE $all_property[$j] = $var ";
				}
			}

			$j++;

		}

		// Filling buffer1 (selection)
		$j = 0;
		foreach ($_POST as $var) {
			$l = $j-$i;
			if($j < $i || !isset($var) ){
				$j++;
				continue;
			}
			if($setSelection)
				$buffer1 .= ",$all_property[$l]";
			else{
				$setSelection = true;
				$buffer1 .= "$all_property[$l]";
			}

			$j++;

		}

		echo "$buffer1 <br />";

		if($buffer1 != "")
			$sql = str_replace("*", $buffer1, $sql);

		echo "$buffer2 <br />";

		$sql .= $buffer2;
		
		echo "$sql <br/>";

		$result = mysqli_query($link, $sql);
		echo "$table <br />";
		direct_display($result);



	}




?>
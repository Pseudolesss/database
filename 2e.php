<?php  

session_start();

echo "<a href=\"home.php\"> Back to home page </a> <br /> <br />";

$_SESSION['2e'] = $_POST['2e'];

if(isset($_POST['2e']))
	switch ($_POST['2e']) {
		case 0:
			echo "Insert Animal: <br />";
			echo '<form action="2ebis.php" method="post">
			  <p>
			      nom_scientifique(str): <input type="text" name="nom_scientifique" required /> <br />
			      n_puce(int): <input type="number" name="n_puce" min=0 required /> <br />
			      taille(int): <input type="number" name="taille" min=0/> <br />
			      sexe(str): <input type="radio" name="sexe" value="M" id="M" /> <label for="M">M</label>
       <input type="radio" name="sexe" value="F" id="F" /> <label for="F">F</label><br />
			      date_naissance(str): <input type="date" name="date_naissance" /> <br />
			      n_enclos(int): <input type="number" name="n_enclos" min=0 required /> <br />

			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';

			break;

		case 1:
			# code...
			break;
		
		default:
			 echo "Error request";
			break;
	}

?>
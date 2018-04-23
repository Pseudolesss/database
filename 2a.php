<?php  

session_start();

echo "<a href=\"home.php\"> Back to home page </a> <br /> <br />";

/*
include("connexion.php");
connexion();

mysqli_select_db($_SESSION['link'],$_SESSION['basename']);
$result = mysqli_query($_SESSION['link'], "SELECT * FROM Materiel WHERE n_materiel = n_materiel AND local = local AND etat = etat");

simpler_display($result);

*/

	if(isset($_POST['table']))
		switch ($_POST['table']) {
	    case "Institution":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      nom_institution(str): <input type="text" name="nom_institution"/> <br />
			      rue(str): <input type="text" name="rue"/> <br />
			      code_postal(str): <input type="text" name="code_postal" /> <br />
			      pays(str): <input type="text" name="pays" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Espece":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      nom_scientifique(str): <input type="text" name="nom_scientifique"  /> <br />
			      nom_courant(str): <input type="text" name="nom_courant" /> <br />
			      regime_alimentaire(str): <input type="text" name="regime_alimentaire" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Climat":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      nom_scientifique(str): <input type="text" name="nom_scientifique"  /> <br />
			      nom_climat(str): <input type="text" name="nom_climat" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Animal":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      nom_scientifique(str): <input type="text" name="nom_scientifique"  /> <br />
			      n_puce(int): <input type="number" name="n_puce" /> <br />
			      taille(int): <input type="number" name="taille" /> <br />
			      sexe(str): <input type="text" name="sexe" /> <br />
			      date_naissance(str): <input type="text" name="date_naissance" /> <br />
			      n_enclos(int): <input type="number" name="n_enclos" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Enclos":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      n_enclos(int):<input type="number" name="n_enclos" /> <br />
			      climat(str):<input type="text" name="climat" /> <br />
			      taille(int):<input type="number" name="taille" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Materiel":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      n_materiel(int):<input type="number" name="n_materiel" /> <br />
			      etat(str):<input type="text" name="etat"/> <br />
			      local(str):<input type="text" name="local" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';

	        break;
	    case "Personnel":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      n_registre(int):<input type="number" name="n_registre" /> <br />
			      nom(str):<input type="text" name="nom" /> <br />
			      prenom(str):<input type="text" name="prenom"/> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Veterinaire":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      n_registre(int):<input type="number" name="n_registre"  /> <br />
			      n_licence(int):<input type="number" name="n_licence" /> <br />
			      specialite(str):<input type="text" name="specialite" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Technicien":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      n_registre(int):<input type="number" name="n_registre" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Intervention":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      n_intervention(int):<input type="number" name="n_intervention"  /> <br />
			      date(str):<input type="text" name="date" /> <br />
			      description(str):<input type="text" name="description" /> <br />
			      n_registre(int):<input type="number" name="n_registre"/> <br />
			      nom_scientifique(str):<input type="text" name="nom_scientifique" /> <br />
			      n_puce(int):<input type="number" name="n_puce" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Entretien":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      n_entretien(int):<input type="number" name="n_entretien"  /> <br />
			      n_registre(int):<input type="number" name="n_registre" /> <br />
			      n_materiel(int):<input type="number" name="n_materiel" /> <br />
			      date(str):<input type="text" name="date" /> <br />
			      n_enclos(int):<input type="number" name="n_enclos" /> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    case "Provenance":
	        $_SESSION['table'] = $_POST['table'];
	        echo $_POST['table'];
	        echo '<form action="2abis.php" method="post">
			  <p>
			      nom_scientifique(str):<input type="text" name="nom_scientifique"/> <br />
			      n_enclos(int):<input type="number" name="n_enclos"/> <br />
			      nom_institution(str):<input type="text" name="nom_institution"/> <br />
			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    default:
	        echo "Error request";
		}

?>
<?php  

session_start();

echo "<a href=\"home.php\"> Back to home page </a> <br /> <br />";


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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">nom_institution</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">rue</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">code_postal</label>
			      <input type="checkbox" name="3" id="3" /> <label for="3">pays</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">nom_scientifique</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">nom_courant</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">regime_alimentaire</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">nom_scientifique</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">nom_climat</label>

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
			      
			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">nom_scientifique</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">n_puce</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">taille</label>
			      <input type="checkbox" name="3" id="3" /> <label for="3">sexe</label>
			      <input type="checkbox" name="4" id="4" /> <label for="4">date_naissance</label>
			      <input type="checkbox" name="5" id="5" /> <label for="5">n_enclos</label>
			      
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
			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">n_enclos</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">climat</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">taille</label>
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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">n_materiel</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">etat</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">local</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">n_registre</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">nom</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">prenom</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">n_registre</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">n_licence</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">specialite</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">n_registre</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">n_intervention</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">date</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">description</label>
			      <input type="checkbox" name="3" id="3" /> <label for="3">n_registre</label>
			      <input type="checkbox" name="4" id="4" /> <label for="4">nom_scientifique</label>
			      <input type="checkbox" name="5" id="5" /> <label for="5">n_puce</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">n_entretien</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">n_registre</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">n_materiel</label>
			      <input type="checkbox" name="3" id="3" /> <label for="3">date</label>
			      <input type="checkbox" name="4" id="4" /> <label for="4">n_enclos</label>

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

			      Selection: <br />
			      <input type="checkbox" name="0" id="0" /> <label for="0">nom_scientifique</label>
			      <input type="checkbox" name="1" id="1" /> <label for="1">n_enclos</label>
			      <input type="checkbox" name="2" id="2" /> <label for="2">nom_institution</label>

			      <input type="submit" value="Valider" /> <br />
			  </p>
			  </form>';
	        break;
	    default:
	        echo "Error request";
		}

?>
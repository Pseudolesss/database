<?php
$host = "localhost";
$login = "root";
$password = "";
$basename = "projet";
$tables = array('Animal','Climat','Enclos', 'Entretien', 'Espece', 'Institution', 'Intervention', 'Materiel', 'Personnel', 'Provenance', 'Technicien', 'Veterinaire');

function connexion()
{
    global $host, $login, $password, $basename, $link, $tables;

    $link = mysqli_connect($host, $login, $password);
    
	    // Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }


	//Creation of a database
    $sql = "CREATE DATABASE IF NOT EXISTS $basename";

    if(mysqli_query($link, $sql)){
    	echo "Database created successfully";
	} else {
	    echo "Error creating database: " . mysqli_error($conn);
	}

	//select database
	mysqli_select_db($link, $basename);

	//Creation of tables
	$sql = file_get_contents("create$tables[5]Table.sql");

	// Execute sql request
	if (mysqli_query($link, $sql)) {
	    echo "Table $tables[5] created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($link);
	}


	// Deleting tables contents if any
	$sql = "DELETE FROM $tables[5];";
	if (mysqli_query($link, $sql)) {
	    echo "Table $tables[5] content deleted successfully";
	} else {
	    echo "Error deleting table content: " . mysqli_error($link);
	}


	// Filling tables
	$path = getcwd();

	$sql = "LOAD DATA INFILE '$path/$tables[5].txt' INTO TABLE $tables[5]\nFIELDS TERMINATED BY ','  LINES TERMINATED BY '\\n'";

	  if (mysqli_query($link, $sql)) {
	    echo "Table $tables[5] filled successfully";
	} else {
	    echo "Error filling table: " . mysqli_error($link);
	}

}
    
?>
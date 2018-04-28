<?php

$host = 'ms800.montefiore.ulg.ac.be'; //ms800.montefiore.ulg.ac.be
$_SESSION['host'] = $host;
$login = $_SESSION['login'];
$password = $_SESSION['password'];
$basename = $_SESSION['basename'];
$tables = $_SESSION['tables'];

function connexion(){
	global $host, $login, $password, $link;

	echo "$host <br />";
    $link = mysqli_connect($host, $login, $password);
    $_SESSION['link'] = $link;
    
	    // Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  echo " <br />";
	  }

}

function initDatabase()
{
	global $tables;
	$basename = $_SESSION['basename'];
	$link = $_SESSION['link'];

    connexion();

	//Creation of a database
    $sql = "CREATE DATABASE IF NOT EXISTS $basename";

    if(mysqli_query($link, $sql)){
    	echo "Database created successfully";
    	echo " <br />";
	} else {
	    echo "Error creating database: " . mysqli_error($link);
	    echo " <br />";
	}

	//select database
	mysqli_select_db($link, $basename);

$path = getcwd();

// Dropping the tables
for($j = 11; $j >= 0; $j--){
	$sql = "DROP TABLE IF EXISTS $tables[$j]";
	if (mysqli_query($link, $sql)) {
	    echo "Table $tables[$j] dropped successfully";
	    echo " <br />";
	} else {
	    echo "Error dropping $tables[$j]: " . mysqli_error($link);
	    echo " <br />";
	}
}

for($i = 0; $i < 12; $i++){


	//Creation of tables
	$sql = file_get_contents("$path/sql/create$tables[$i]Table.sql");

	// Execute sql request
	if (mysqli_query($link, $sql)) {
	    echo "Table $tables[$i] created successfully";
	    echo " <br />";
	} else {
	    echo "Error creating $tables[$i]: " . mysqli_error($link);
	    echo " <br />";
	}

	// Filling tables

	$sql = "LOAD DATA LOCAL INFILE '$path/txt/$tables[$i].txt' INTO TABLE $tables[$i]\nFIELDS TERMINATED BY ','  LINES TERMINATED BY '\\n' IGNORE 1 LINES";

	  if (mysqli_query($link, $sql)) {
	    echo "Table $tables[$i] filled successfully";
	    echo " <br />";
	} else {
	    echo "Error filling $tables[$i]: " . mysqli_error($link);
	    echo " <br />";
	}

}

}

function display($i){
	
	global $link, $tables, $basename;

	// Set link variable
	connexion();
	mysqli_select_db($link, $basename);

	echo "$tables[$i] <br />";

	//Display tables

	//get results from database
	$result = mysqli_query($link,"SELECT * FROM $tables[$i]");
	$all_property = array();  //declare an array for saving property

	//showing property
	echo '<table class="data-table">
	        <tr class="data-heading">';  //initialize table tag
	while ($property = mysqli_fetch_field($result)) {
	    echo '<td>' . $property->name . '</td>';  //get field name for header
	    array_push($all_property, $property->name);  //save those to array
	}
	echo '</tr>'; //end tr tag

	//showing all data
	while ($row = mysqli_fetch_array($result)) {
	    echo "<tr>";
	    foreach ($all_property as $item) {
	        echo '<td>' . $row[$item] . '</td>'; //get items using property value
	    }
	    echo '</tr>';
	}
	echo "</table>";
	echo "<br />";

}

function direct_display($result){

	$all_property = array();  //declare an array for saving property

	//showing property
	echo '<table class="data-table">
	        <tr class="data-heading">';  //initialize table tag
	while ($property = mysqli_fetch_field($result)) {
	    echo '<td>' . $property->name . '</td>';  //get field name for header
	    array_push($all_property, $property->name);  //save those to array
	}
	echo '</tr>'; //end tr tag

	//showing all data
	while ($row = mysqli_fetch_array($result)) {
	    echo "<tr>";
	    foreach ($all_property as $item) {
	        echo '<td>' . $row[$item] . '</td>'; //get items using property value
	    }
	    echo '</tr>';
	}
	echo "</table>";
	echo "<br />";

}
    
?>
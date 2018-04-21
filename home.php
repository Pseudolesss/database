<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
       

<?php

/*
session_start();

if (isset($_POST['username'], $_POST['password']) {
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    echo '<a href="nextpage.php">Click to continue.</a>';
} else {
    // form
}
*/

session_start();

if (isset($_POST['login'], $_POST['password']) AND $_POST['login'] == "root" AND $_POST['password'] == "") {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = $_POST['password'];
    
include("connexion.php");   

  connexion();

  for($i = 0; $i < 12; $i++){
  display($i);
}


  mysqli_close($link);

  echo '<form action="affichertexte.php" method="post">
  <p>
      <input type="text" name="prenom" /> <br />
      <input type="text" name="a" /> <br />
      <input type="text" name="b" /> <br />
      <input type="text" name="c" /> <br />
      <input type="text" name="d" /> <br />
      <input type="text" name="e" /> <br />
      <input type="text" name="f" /> <br />
      <input type="submit" value="Valider" /> <br />
  </p>
  </form>';

}

else {
    echo '<a href="index.html">Bad login or password click to continue.</a>';
}

?>


          
        </p>
    </body>
</html>
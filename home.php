<?php  
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Notre première instruction : echo</title>
        <meta charset="utf-8" />
    </head>
    <body>
       

<?php
  
  $tables = $_SESSION['tables'];

  echo "<a href=\"href.php?reset\"> Reset Database </a> <br />";
  echo '<br />';
  echo 'display table ... <br />';
  for($i = 0; $i < 12; $i++)
  echo "<a href=\"href.php?display=$i\"> $tables[$i] </a> <br />";


  // Liste deroulante pour choix de la table question 2.a
  echo 'Question 2.a <br />';
  echo '
  <form action="2a.php" method="post">
  <p>
  <select name="table">';
  for($i = 0; $i < 12; $i++)
  echo "<option value=\"$tables[$i]\">$tables[$i]</option>";
  echo '<input type="submit" value="Valider" /> <br />
</select>
</p>
  </form>';


?>


          
        </p>
    </body>
</html>
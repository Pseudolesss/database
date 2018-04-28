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
  echo "<br />";

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
  echo "<br />";

  // Lien vers la résolution de la question 2.b
  echo "<a href=\"href.php?2b\"> Question 2.b </a> <br />";
  echo '<br />';

  // Lien vers la résolution de la question 2.c
  echo "<a href=\"href.php?2c\"> Question 2.c </a> <br />";
  echo '<br />';

  // Lien vers la résolution de la question 2.d
  echo "<a href=\"href.php?2d\"> Question 2.d </a> <br />";
  echo '<br />';


// Liste deroulante pour choix de la table question 2.a
  echo 'Question 2.e <br />';
  echo '
  <form action="2e.php" method="post">
  <p>
  <select name="2e">';
  echo "<option value=0>Animal</option>";
  echo "<option value=1>Animal + Institution</option>";
  echo '<input type="submit" value="Valider" /> <br />
</select>
</p>
  </form>';
  echo "<br />";




?>


          
        </p>
    </body>
</html>
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

        if (isset($_POST['login'], $_POST['password']) AND $_POST['login'] == "root" AND $_POST['password'] == "") {
            $_SESSION['login'] = $_POST['login'];
            $_SESSION['password'] = $_POST['password'];
            $_SESSION['tables'] = $tables = array('Institution', 'Espece', 'Enclos', 'Materiel', 'Climat', 'Animal', 'Personnel', 'Veterinaire', 'Technicien', 'Intervention', 'Entretien', 'Provenance', 'Temporaire');
            $_SESSION['basename'] = $_POST['login'];
            
        include("connexion.php");   

            echo '<a href="home.php"> Click here to proceed </a>';

            connexion();
            if(!mysqli_select_db($_SESSION['link'], $_SESSION['basename']))
            initDatabase();

        }

        else {
            echo '<a href="index.html">Bad login or password click to continue.</a>';
        }

    ?>


        </p>
    </body>
</html>
<?php
    require_once("controleur/controleur.class.php");
    //instancier la classe controleur :
    $unControleur = new Controleur();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Orange</title>
</head>
<body>
    <center>
        <h1>Site Orange pour la gestion des intervention</h1>
        <br><a href="index.php?page=1"> 
            <img src="images/logo.png" height="100" width="100">
        </a>

        <a href="index.php?page=2"> 
            <img src="images/client.png" height="100" width="100">
        </a>

        <a href="index.php?page=3"> 
            <img src="images/technicien.png" height="100" width="100">
        </a>

        ><a href="index.php?page=4"> 
            <img src="images/telephone.jpg" height="100" width="100">
        </a>

       <a href="index.php?page=5"> 
            <img src="images/intervention.png" height="100" width="100">
        </a>
        <?php
            if (isset($_GET['page'])){
                $page = $_GET['page'];
            }else {
                $page = 2 ;
            }
            switch ($page) {
                case 1 : require_once ("controleur/home.php"); break;
                case 2 : require_once ("controleur/gestion_clients.php"); break;
                case 3 : require_once ("controleur/gestion_technicien.php"); break;
                case 4 : require_once ("controleur/gestion_telephones.php"); break;
                case 5 : require_once ("controleur/gestion_intervention.php"); break;
            }
        ?>
    </center>
</body>
</html>
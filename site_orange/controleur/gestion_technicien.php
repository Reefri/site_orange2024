<br>
<h2>Gestion des technicien</h2>

<?php

    $leTechn = null;
    if (isset($_GET['action']) && isset($_GET['idtechnicien'])){
        $action = $_GET['action'];
        $idtechnicien = $_GET['idtechnicien'];

        switch ($action){
            case 'sup';
                $unControleur->deleteTechn($idtechnicien);
                break;

            case 'edit';
                $leTechn = $unControleur->selectWhereTechn($idtechnicien);

                break;
        }
    }

    require_once ("vue/vue_insert_technicien.php");

    if (isset($_POST["Valider"])){
        //insertion des données dans la base
        $unControleur->insertTechn($_POST);
        echo "<br> Insertion réussie.";
    }

    if (isset($_POST["Modifier"])){
        //update des données dans la base
        $unControleur->updateTechn($_POST);
        echo "<br> Modification réussie.";

        header("Location: index.php?page=2");
    }

    if (isset($_POST['Filtrer'])){
        $filtre = $_POST['filtre'];
    }
    else{
        $filtre = "";
    }
    $lesTechns = $unControleur->selectAllTechns($filtre);

    require_once ("vue/vue_select_technicien.php");
    
?>
<br>
<h2>Gestion des telephones</h2>

<?php
    $lesClients = $unControleur->selectAllClients("");
    require_once ("vue/vue_insert_telephone.php");

    $lesTels = $unControleur->selectAllTels("");

    require_once ("vue/vue_select_telephone.php");
    
?>
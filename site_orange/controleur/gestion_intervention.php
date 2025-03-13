<br>
<h2>Gestion intervention</h2>

<?php

    $lesTechns = $unControleur->selectAllTechns("");
    $lesTels = $unControleur->selectAllTels("");
    require_once ("vue/vue_insert_intervention.php");

    require_once ("vue/vue_select_intervention.php");
    
?>
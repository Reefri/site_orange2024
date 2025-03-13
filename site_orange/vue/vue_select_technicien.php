<br>
<h3>Liste des technicien</h3>
<form method="post">
    Filtrer par : <input type="text" name="filtre">
                <input type="submit" name="Filtrer" value="Filtrer">
</form>
<br>

<table border="1">
    <tr>
        <td>Id technicien</td>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Specialité</td>
        <td>Email</td>
        <td>Téléphone</td>
        <td>Opération</td>
    </tr>

<?php
//liste des clients de la BDD
    if(isset($lesTechns)){
    foreach($lesTechns as $unTechn){
        echo "<tr>";
        echo "<td>".$unTechn["idtechnicien"]."</td>";
        echo "<td>".$unTechn["nom"]."</td>";
        echo "<td>".$unTechn["prenom"]."</td>";
        echo "<td>".$unTechn["specialite"]."</td>";
        echo "<td>".$unTechn["email"]."</td>";
        echo "<td>".$unTechn["tel"]."</td>";

        echo "<td>";
        echo "<a href='index.php?page=3&action=sup&idtechnicien=".$unTechn["idtechnicien"]."'><img src='images/supprimer.png' heigth='30' width='30'></a>";
        echo "<a href='index.php?page=3&action=edit&idtechnicien=".$unTechn["idtechnicien"]."'><img src='images/editer.png' heigth='30' width='30'></a>";
        

        echo "</td>";
        echo "</tr>";
    }
}
?>
</table>
<br><br><br>
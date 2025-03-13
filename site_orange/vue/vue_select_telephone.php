<br>
<h3>Liste des telephone</h3>
<br>

<table border="1">
    <tr>
        <td>Id Téléphone</td>
        <td>designation</td>
        <td>prixAchat</td>
        <td>dateAchat</td>
        <td>Client</td>

        <td>Operations</td>
    </tr>

    <?php
//liste des clients de la BDD
    if(isset($lesTels)){
        foreach($lesTels as $unTel){
            echo "<tr>";
            echo "<td>".$unTel["idtelephone"]."</td>";
            echo "<td>".$unTel["designation"]."</td>";
            echo "<td>".$unTel["prixAchat"]."</td>";
            echo "<td>".$unTel["dateAchat"]."</td>";
            echo "<td>".$unTel["idclient"]."</td>";

            echo "<td>";

            echo "<a href='index.php?page=4&action=sup&idtelephone=".$unTel["idtelephone"]."'><img src='images/supprimer.png' heigth='30' width='30'></a>";
            echo "<a href='index.php?page=4&action=edit&idtelephone=".$unTel["idtelephone"]."'><img src='images/editer.png' heigth='30' width='30'></a>";
            

            echo "</td>";
            echo "</tr>";
        }
    }

?>
</table>
<br><br><br>
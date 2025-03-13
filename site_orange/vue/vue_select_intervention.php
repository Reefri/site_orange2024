<br>
<h3>Liste des technicien</h3>
<br>

<table border="1">
    <tr>
        <td>Id Intervention</td>
        <td>Description</td>
        <td>Prix Intervention</td>
        <td>Date Intervention</td>
        <td>Technicien</td>
        <td>Téléphone</td>
    </tr>

    <?php
//liste des clients de la BDD
    if(isset($lesInters)){
        foreach($lesInters as $unInter){
            echo "<tr>";
            echo "<td>".$unTel["idInter"]."</td>";
            echo "<td>".$unTel["designation"]."</td>";
            echo "<td>".$unTel["prixInter"]."</td>";
            echo "<td>".$unTel["dateInter"]."</td>";
            echo "<td>".$unTel["idtechnicien"]."</td>";
            echo "<td>".$unTel["idtelephone"]."</td>";

            echo "<td>";

            echo "<a href='index.php?page=5&action=sup&idinter=".$unInter["idInter"]."'><img src='images/supprimer.png' heigth='30' width='30'></a>";
            echo "<a href='index.php?page=5&action=edit&idinter=".$unInter["idInter"]."'><img src='images/editer.png' heigth='30' width='30'></a>";
            

            echo "</td>";
            echo "</tr>";
        }
    }

?>
</table>
<br><br><br>
<br>
<h3>Ajout d'une intervention</h3>
<form method="post">
    <table>
        <tr>
            <td>Description</td>
            <td> <textarea name="description" rows="5" cols="50">
            </textarea></td>
        </tr>

        <tr>
            <td>Prix Intervention</td>
            <td> <input type="text" name="prixInter"></td>
        </tr>

        <tr>
            <td>Date Intervention:</td>
            <td> <input type="date" name="dateInter"></td>
        </tr>

        <tr>
            <td>Le Technicien :</td>
            <td> <select name="idtechnicien">
                
            <?php
                    foreach ($lesTechns as $unTech){

                        echo '<option value="'.$unTech['idtechnicien'].'">';
                        echo $unTech['idtechnicien'].' '.$unTech['nom'].' '.$unTech['prenom'];
                        echo '</option>';

                    }
            ?>

            </select></td>
        </tr>

        <tr>
            <td>Le Telephone :</td>
            <td> <select name="idtelephone">
            <?php
                    foreach ($lesTels as $unTel){

                        echo '<option value="'.$unTel['idtelephone'].'">';
                        echo $unTel['idtelephone'].' '.$unTel['designation'].' '.$unTel['dateAchat'];
                        echo '</option>';

                    }
            ?>
            </select></td>
        </tr>

        <tr>
        <td> <input type ="reset" name="Annuler" value="Annuler"></td>
        <td> <input type ="submit" name="Valider" value="Valider"></td>
        </tr>
    <table>
</form>
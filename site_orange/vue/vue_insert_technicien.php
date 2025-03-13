<br>
<h3>Ajout d'un technicien</h3>
<form method="post">
    <table>
        <tr>
            <td>Nom du technicien :</td>
            <td> <input type="text" name="nom" value="<?= ($leTechn==null)?'':$leTechn['nom'] ?>"></td>
        </tr>

        <tr>
            <td>Prenom du technicien :</td>
            <td> <input type="text" name="prenom" value="<?= ($leTechn==null)?'':$leTechn['prenom'] ?>"></td>
        </tr>

        <tr>
            <td>Specialité :</td>
            <td> 
            <select name="specialite">
                <option value="telephonie">Téléphonie</option>
                <option value="boc">Box Internet</option>
                <option value="autre">Autre</option>
            </select>
            </td>
        </tr>

        <tr>
            <td>Email technicien :</td>
            <td> <input type="text" name="email" value="<?= ($leTechn==null)?'':$leTechn['email'] ?>"></td>
        </tr>

        <tr>
            <td>Tel technicien :</td>
            <td> <input type="text" name="telephone" value="<?= ($leTechn==null)?'':$leTechn['tel'] ?>"></td>
        </tr>

        <tr>
        <td> <input type ="reset" name="Annuler" value="Annuler"></td>
        <td> <input type ="submit" <?= ($leTechn==null)? 'name="Valider" value="Valider"' : 'name="Modifier" value="Modifier"'?>></td>

        </tr>
        <?= ($leTechn==null)?'' : '<input type="hidden" name="idtechnicien" value="'.$leTechn['idtechnicien'].'" >' ?>
    <table>
</form>

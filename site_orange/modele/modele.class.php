<?php
class Modele {
    private $unPdo ; 
    //connexion via la classe PDO : PHP DATA Object

    public function __construct(){
        $serveur = "localhost";
        $bdd ="orange_25_Slam2A";
        $user = "root";
        $mdp = "";

        try{
        $this->unPdo = new PDO("mysql:host=".$serveur.";dbname=".$bdd,$user,$mdp);
        }
        catch(PDOException $exp){
            echo "Erreur de connexion a la base de BDD";
        }
    }
    /***************Gestion des clients */
    public function insertClient($tab){
        $requete = "insert into client values(null, :nom, :prenom, :adresse, :email, :tel)";
        $donnees = array(':nom' => $tab['nom'],
                        ':prenom' => $tab['prenom'],
                        ':adresse' => $tab['adresse'],
                        ':email' => $tab['email'],
                        ':tel' => $tab['telephone']
                        );
        //on prepare la requete
        $exec = $this->unPdo->prepare ($requete);
        //exécuter la requete
        $exec->execute ($donnees);
    }

    public function selectAllClients($filtre){
        if ($filtre == ""){
            $requete ="select * from client;";
            $exec = $this->unPdo->prepare($requete);
            $exec->execute();
        }

        else {$requete ="select * from client 
                        where nom like :filtre 
                        or prenom like :filtre 
                        or adresse like :filtre 
                        or email like :filtre 
                        or tel like :filtre;";
        
        $donnees = array(":filtre"=>"%".$filtre."%");
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);

        }
        return $exec->fetchAll();
    }

    public function deleteClient($idclient){
        $requete = "delete from client where idclient = :idclient;";
        $donnees = array(":idclient"=>$idclient);
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }

    public function updateClient($tab){
        $requete = "update client set nom=:nom,prenom=:prenom,adresse=:adresse, tel=:tel, email=:email where idclient=:idclient;";

        $donnees = array(
                        ':idclient' => $tab['idclient'],
                        ':nom' => $tab['nom'],
                        ':prenom' => $tab['prenom'],
                        ':adresse' => $tab['adresse'],
                        ':email' => $tab['email'],
                        ':tel' => $tab['telephone']
                        );

        $exec = $this->unPdo->prepare ($requete);
        
        $exec->execute ($donnees);
    }

    public function selectWhereClient($idClient){
        $requete = "select * from client where idclient=:idclient;";
        $donnees = array(":idclient"=>$idClient);
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);

        $unClient = $exec->fetch();
        return $unClient;
    }

    /***************Gestion des techniciens */
    public function insertTechn($tab){
        $requete = "insert into technicien values(null, :nom, :prenom, :specialite, :email, :tel)";
        $donnees = array(':nom' => $tab['nom'],
                        ':prenom' => $tab['prenom'],
                        ':specialite' => $tab['specialite'],
                        ':email' => $tab['email'],
                        ':tel' => $tab['telephone']
                        );
        //on prepare la requete
        $exec = $this->unPdo->prepare ($requete);
        //exécuter la requete
        $exec->execute ($donnees);
    }

    public function selectAllTechns($filtre){
        if ($filtre == ""){
            $requete ="select * from technicien;";
            $exec = $this->unPdo->prepare($requete);
            $exec->execute();
        }

        else {$requete ="select * from technicien 
                        where nom like :filtre 
                        or prenom like :filtre 
                        or specialite like :filtre 
                        or email like :filtre 
                        or tel like :filtre;";
        
        $donnees = array(":filtre"=>"%".$filtre."%");
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);

        }
        return $exec->fetchAll();
    }

    public function deleteTechn($idtechnicien){
        $requete = "delete from technicien where idtechnicien = :idtechnicien;";
        $donnees = array(":idtechnicien"=>$idtechnicien);
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);
    }

    public function updateTechn($tab){
        $requete = "update technicien set nom=:nom,prenom=:prenom,specialite=:specialite, tel=:tel, email=:email where idtechnicien=:idtechnicien;";

        $donnees = array(
                        ':idtechnicien' => $tab['idtechnicien'],
                        ':nom' => $tab['nom'],
                        ':prenom' => $tab['prenom'],
                        ':specialite' => $tab['specialite'],
                        ':email' => $tab['email'],
                        ':tel' => $tab['telephone']
                        );

        $exec = $this->unPdo->prepare ($requete);
        
        $exec->execute ($donnees);
    }

    public function selectWhereTechn($idtechnicien){
        $requete = "select * from technicien where idtechnicien=:idtechnicien;";
        $donnees = array(":idtechnicien"=>$idtechnicien);
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);

        $untechnicien = $exec->fetch();
        return $untechnicien;
    }

     /***************Gestion des telephones */

    public function selectAllTels($filtre){
        if ($filtre == ""){
            $requete ="select * from telephone;";
            $exec = $this->unPdo->prepare($requete);
            $exec->execute();
        }

        else {$requete ="select * from telephone 
                        where designation like :filtre 
                        or dateachat like :filtre";
        
        $donnees = array(":filtre"=>"%".$filtre."%");
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);

        }
        return $exec->fetchAll();
    }

     /***************Gestion des interventions */
    public function selectAllInters($filtre){
        if ($filtre == ""){
            $requete ="select * from telehone;";
            $exec = $this->unPdo->prepare($requete);
            $exec->execute();
        }

        else {$requete ="select * from intervention 
                        where description like :filtre 
                        or dateinter like :filtre";
        
        $donnees = array(":filtre"=>"%".$filtre."%");
        $exec = $this->unPdo->prepare($requete);
        $exec->execute($donnees);

        }
        return $exec->fetchAll();
    }
}
?>
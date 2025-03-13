<?php
    require_once ("modele/modele.class.php");
    class Controleur {
        private $unModele ;

        public function __construct(){
            //instancier la classe modele
            $this->unModele= new Modele ();
        }
        /**********Gestion des clients *************/
        public function insertClient($tab){
            //controler les donnees avant de les insertion dans la BDD

            //appel au modele pour inserer les données
            $this->unModele->insertClient($tab);
        }
        
        public function selectAllClients($filtre){
            $lesClients = $this->unModele->selectAllClients($filtre);


            return $lesClients;
        }

        public function deleteClient($idclient){
            $this->unModele->deleteClient($idclient);
        }

        public function updateClient($tab){
            $this->unModele->updateCLient($tab);
        }

        public function selectWhereClient($idClient){
            return $this->unModele->selectWhereClient($idClient);
        }
    

        /**********Gestion des techniciens *************/
        public function insertTechn($tab){
            //controler les donnees avant de les insertion dans la BDD

            //appel au modele pour inserer les données
            $this->unModele->insertTechn($tab);
        }
        
        public function selectAllTechns($filtre){
            $lesTechns = $this->unModele->selectAllTechns($filtre);


            return $lesTechns;
        }

        public function deleteTechn($idtechnicien){
            $this->unModele->deleteTechn($idtechnicien);
        }

        public function updateTechn($tab){
            $this->unModele->updateTechn($tab);
        }

        public function selectWhereTechn($idtechnicien){
            return $this->unModele->selectWhereTechn($idtechnicien);
        }

        /**********Gestion des telephones *************/
        
        public function selectAllTels($filtre){
            $lesClients = $this->unModele->selectAllTels($filtre);


            return $lesClients;
        }

        /**********Gestion des interventions *************/

        public function selectAllInters($filtre){
            $lesClients = $this->unModele->selectAllInters($filtre);


            return $lesClients;
        }
        
    }


?>
<?php


    class Evenement
    {
        private $_nom;
        private $_prenom;
        private $_sexe;
        private $_telephone;
        private $_dateDeNaissance;
        private $_adresseDomicile;
        private $_problemeSante;
        private $_antecedents;
        
        private $_host = 'mysql:host=localhost;dbname=gestion_des_evenements';
        private $_username = "root";
        private $_password = "";
        private $_bdd;


        // Déclaration des constantes
        // const HOTE = "localhost";
        // const USER = "root";
        // const PASSWORD = "";

        public function getHost()
        {
            return $this->_host;
        }
        public function setHost($host)
        {
            return $this->$host;
        }
        public function getUsername()
        {
            return $this->_username;
        }
        public function getPassword()
        {
            return $this->_password;
        }
        public function getBdd()
        {
            return $this->_bdd;
        }
        public function setBdd($bdd)
        {
            return $this->_bdd = $bdd;
        }


        public function connexion()
        {
            try {
                $don = $this->setBdd(new PDO($this->getHost(), $this->getUsername(), $this->getPassword()));
                $don->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $e) {
                echo "Erreur : " .$e->getMessage();
            }
        }
        public function addEven()
        {
            return "INSERT INTO evenement(nomEv,dateDebut,dateFin,organisateur,lieu,contact,decrire) 
                     VALUES(:nom,:datedebut,:datefin,:organisateur,:lieu,:telephone,:decrire)";
        }
    }

?>
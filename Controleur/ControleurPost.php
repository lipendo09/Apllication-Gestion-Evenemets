<?php
require 'vues/Vue.php';

class ControleurPost{

    private $_evenementManager;
    private $_vue;

    public function __construct(){
        if(isset($url) && count($url) < 1){
            throw new \Exception("Page introuvable");
           
        }
        elseif (isset($_GET['enregistrer'])){

            $this->enregistrer();
        }

        elseif (isset($_GET['status']) && isset($_GET['status']) == "new" ){

            $this->store();
        }
      
        else {
            $this->evenement();
        }
    }
        // fonction pour afficher un article

        
        private function evenement(){

            if(isset($_GET['id'])){

                $this->_evenementManager= new enevementManager;
                $evenement= $this->_evenementManager->getEvenement($_GET['id']);

            }

        }

            // enregistrer un évènement

            
        // private function store(){
        //     $this->_evenementManager= new EvenementManager;
        //     $evenement = $this->_evenementManager->enregistrerEvenement();
        //     $evenements = $this->_evenementManager->getEvenements();
        //     $this->_vue= new Vue('Accueil');
        //     $this->_vue->generate(array('evenements'=> $evenements));

        // }


}








?>
<?php
require_once ('../Vue/Vue.php');

class ControleurAccueil {
  private $_evenementManager;
  private $_vue;
  
  //constructeur
  
  public function __construct(){
    if (isset($url) && count($url)> 1 ) {
      
      throw new \Exception ("page introuvable", 1);
    }
    
    else {
      $this->evenements();
    }
  }
  private function evenements(){
    $this->_evenementManager= new EvenementManager();
    $evenements=$this->_evenementManager->getEvenements();
    
    $this->_vue= new Vue('Accueil');
    $this->_vue->generate(array('evenements'=> $evenements));

    
  }

}

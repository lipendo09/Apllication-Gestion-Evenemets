<?php

require_once 'vues/Vue.php';

class Routeur{
  private $_ctrl;
  private $_vue;
  
  public function routeReq(){
    try {
      
      // charger toutes les classes
      
    function chargeur ($class){
        include('models/'.$class.'.php');
        
      };
      spl_autoload_register('chargeur');
        
        $url='';
        if (isset($_GET['url'])) {
          $url=explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
          
          $controleur=ucfirst(strtolower($url[0]));
          
          $controleurClass="Controleur".$controleur;
          
          $ControleurFile="controleurs/".$controleurClass.".php";
          
          
          if(file_exists($ControleurFile)){
            require_once($ControleurFile);
            $this->ctrl= new $controleurClass($url);
            
            
          }else {
            throw new \Exception("Page introuvable", 1);
          }
        }
        else{
          require_once('controleurs/ControleurAccueil.php');
          $this->ctrl= new ControleurAccueil($url=null);
          
        }
        
     
      
      
    } catch (Exception $e) {
      $errorMsg=$e->getMessage();
      $this->_vue = new Vue('Error');
      $this->_vue->generate(array('errorMsg' =>$errorMsg));
     
      
      
    }
    
  }
}






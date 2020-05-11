<?php

class Evenement{
  private $id;
  private $nom;
  private $date_debut;
  private $date_fin;
  private $organisateur;
  private $description;
  
  
  public function __construct(array $data){
    $this->hydrate($data);
  }
  
  
  public function hydrate(array $data){
    foreach ($data as $key => $value){
      $method='set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }
  
  
  //les setteurs
  public function setId($id){
    $id=(int)$id;
    if ($id>0){
     $this->_id=$id;
    }
  }
  

  public function setNom($nom){
    if (is_string($nom)){
      $this->_nom=$nom;
    }
  }
  
  public function setDate_debut($date_debut){
      $this->date_debut=$date_debut;
    
  }
  public function setDate_fin($date_fin){
      $this->$date_fin= $date_fin;
  
  }
  
  public function setOrganisateur($organisateur){
    if (is_string($organisateur)){
      $this->$organisateur= $organisateur;
    }
  }

    public function setDescription($description){
      if (is_string($description)){
        $this->$description= $description;
      }
  }
  
  
  //les getters
  
  public function id(){
   return $this->id;
  }
  
  public function nom(){
   return $this->nom;
  }
  
  
public function date_debut(){
   return $this->date_debut;
  }
  
  public function date_fin(){
   return $this->date_fin;
  }
  
  public function organisateur(){
   return $this->organisateur;
  }
  public function description(){
    return $this->description; 
  }
}

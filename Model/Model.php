<?php

abstract class Model {
  
  private static $_bdd;
  private static  function setBdd (){
    self::$_bdd=new PDO('mysql:host=localhost;dbname=evenement','root','');
    self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    
  }
  
  protected function getBdd(){
    if (self::$_bdd==null) {
      self::setBdd();
      return self::$_bdd;
    }
  }
  protected function getAll($table, $obj){
    $this->getBdd();
    $var=[];
    $req= self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
   // $req->execute();
    
    while($data = $req->fetch(PDO::FETCH_ASSOC)){
      $var[] = new $obj($data);
      return $var;
      $req->closeCursor();
    }
  }
  
  protected function enregistrerOne($table, $obj){

    $this->getBdd();
    $req= self::$_bdd->prepare("INSERT INTO".$table."(nom, dateDebut, dateFin, organisateur, description)
     VALUES (?, ?, ?, ?, ?)");
    $req->execute(array($_POST['nom_evenement'], $_POST['date_debut'], $_POST['date_fin'],
     $_POST['organisateur'], $_POST['description']));
    $req->closeCursor();
  }

}
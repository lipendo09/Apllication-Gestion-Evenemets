<?php
 class EvenementManager extends Model{
   
   
   
   
   
   public function getEvenements(){
  
     
     return self::getAll('evenement','Evenement');
   }
   
   public function enregistrerEvenement(){
    return $this->enregistrerOne('evenement','Evenement');

   }
 }

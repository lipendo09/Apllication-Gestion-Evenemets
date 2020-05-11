<?php
include_once("Evenement.php");
include_once("Commentaire.php");
class Manager{
    private $base;
    function __construct(){
        $this->base=$GLOBALS["base"];
    }

    function getNom($nom=""){
        $evenement_liste=[];
        $get=$this->base->query("SELECT * FROM evenement");
        if ($nom!=""){
            $get=$this->base->prepare("SELECT * ,COUNT(nom) as nombre FROM evenement WHERE nom=:nom");
           $get->execute(array("nom"=>$nom));
        }
        $don= $get->fetchAll();
        foreach($don as $key=>$tom) {
            $evenement=new Evenement($tom);
            $evenement_liste[$key]=$evenement;
        }
        return $evenement_liste;
    }
    
    
function enregistrer($evenementregister){
    print_r($evenementregister);
    $inserer=$this->base->prepare("INSERT INTO evenement(nom,dateDebut,dateFin,organisateur,description) VALUES(:nom_evenement,:date_debut,:date_fin,:organisateur,:descript)");
    $inserer->execute(array(

        "nom_evenement"=>$evenementregister->getNom(),
        "date_debut"=>$evenementregister->getDate_debut(),
        "date_fin"=>$evenementregister->getDate_fin(),
        "organisateur"=>$evenementregister->getOrganisateur(),
        "descript"=>$evenementregister->getDescription(),
       
    ));
}

function misejour($evenement_ajour){
    $modi=$this->base->prepare("UPDATE evenement SET nom=:nom_evenement,dateDebut=:date_debut,dateFin=:date_fin,organisateur=:organisateur,description=:descript WHERE nom=:nom_evenement");
    $modi->execute(array(

        "nom_evenement"=>$evenement_ajour->getNom(),
        "date_debut"=>$evenement_ajour->getDate_debut(),
        "date_fin"=>$evenement_ajour->getDate_fin(),
        "organisateur"=>$evenement_ajour->getOrganisateur(),
        "descript"=>$evenement_ajour->getDescription()
        
    ));
}

function supprimer($evenement_delete){
    $supr=$this->base->prepare("DELETE FROM evenement WHERE id= ?");
    $supr->execute(array(
        "id"=>$evenement_delete
    ));
}

/**
 * Gestion des commentaires 
 * dans la base
 */
function getCommentaire($commentaire=""){
    $commentaire_liste=[];
    $get=$this->base->query("SELECT * FROM commentaire");
    if ($commentaire!=""){
        $get=$this->base->prepare("SELECT * ,COUNT(prenom) as nombre FROM commentaire WHERE prenom=:prenom, commentaire=:commentaire");
       $get->execute(array("prenom"=>$prenom));
    }
    $dan= $get->fetchAll();
    foreach($dan as $key=>$tam) {
        $commentaire=new Commentaire($tam);
        $commentaire_liste[$key]=$commentaire;
    }
    return $commentaire_liste;
}

function enregistrer_commentaire($commentaireregister){
    print_r($commentaireregister);
    $inserer=$this->base->prepare("INSERT INTO commentaire(prenom,commentaire) VALUES(:prenom,:commentaire)");
    $inserer->execute(array(

        "prenom"=>$commentaireregister->getPrenom(),
        "date_debut"=>$commentaireregister->getCommentaire(),
              
    ));
}


} 
?>
<?php

    require_once('../Model/class.php');



    function insertEven()
    {
        $bdd = new Evenement();
        $bdd->connexion();
        $nom = $_POST['nom'];
        $date_debut = $_POST['date-debut'];
        $date_fin = $_POST['date-fin'];
        $organisateur = $_POST['organisateur'];
        $lieu = $_POST['lieu'];
        $contact = $_POST['telephone'];
        $decrire = $_POST['champ-texte'];
    

        $query = $bdd->getBdd()->prepare($bdd->addEven());
        $array = array(
            'nom' => $nom,
            'datedebut' => $date_debut,
            'datefin' => $date_fin,
            'organisateur' => $organisateur,
            'lieu' => $lieu,
            'telephone' => $contact,
            'decrire' => $decrire
        );

        $query->execute($array);
    }


    if (isset($_POST['Form-even']))
    {
        insertEven();
        
        echo "L'évènement a bien été enregistré.";

    }

?>


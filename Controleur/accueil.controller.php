<?php
    require_once('../Modele/db.class.php');
    require('../even/class.php');

    $DB = new DB();


    function recupDate()
    {
        $database = $evenement->dateDebut;
        $date = date("d:m:Y", strtotime($database));
        return date("d:m:Y", $date);
    }






?>
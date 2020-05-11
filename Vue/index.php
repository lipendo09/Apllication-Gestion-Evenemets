<?php
    require('header.php');
    
?>


        <div class="position-connexion">
            <a href="../authentification.php" class="btn btn-primary">Connexion</a>
        </div>
        <div class="card center text-center mb-5 ajuster">
            <h5 class="card-header">BIENVENUE AUX EVENEMENTS DE OUAGADOUGOU</h5>
        </div>

        <div class="row row-cols-2 row-cols-md-3 pr-5 pl-5">
            <?php $evenements = $DB->query('SELECT * FROM evenement ORDER BY dateDebut') ?>
            <?php foreach ($evenements as $evenement): ?>
                <div class="col mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center font-weight-bolder">
                                <h1 class="card-title"><strong><?php echo $evenement->dateDebut.' au '.$evenement->dateFin ?></strong></h1>
                            </div>
                            <div class="text-center text-uppercase">
                                <h3 class="card-title"><?php echo $evenement->nomEv ?></h3>
                            </div>
                            <div class="text-center">
                                <p class="card-text font-italic"><?php echo $evenement->lieu ?></p>
                            </div>
                            <div class="position">
                                <a href="info-evenement.php" class="btn btn-primary">Consulter</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>



<?php
    require('footer.php');
?>

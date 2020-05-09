<?php
    require('header.php');
?>





        

        <form class="mt-5 mr-5 ml-5" method="post" action="../even/enregistrer.php">
            <div class="form-group row">
                <label for="nom" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="date-d" class="col-sm-4 col-form-label">Date début</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="date-d" name="date-debut">
                </div>
            </div>
            <div class="form-group row">
                <label for="date-f" class="col-sm-4 col-form-label">Date fin</label>
                <div class="col-sm-3">
                    <input type="date" class="form-control" id="date-f" name="date-fin">
                </div>
            </div>
            <div class="form-group row">
                <label for="organiz" class="col-sm-4 col-form-label">Organisateur</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="organiz" name="organisateur">
                </div>
            </div>
            <div class="form-group row">
                <label for="lieu-geo" class="col-sm-4 col-form-label">Lieu</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control" id="lieu-geo" name="lieu">
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-sm-4 col-form-label">Contact</label>
                <div class="col-sm-3">
                    <input type="tel" class="form-control" id="phone" name="telephone" placeholder="Pas d'espaces entre les nombres">
                </div>
            </div>
            <div class="form-group row">
                <label for="text-zone" class="col-sm-4 col-form-label">Description</label>
                <div class="col-sm-5">
                    <textarea class="form-control" id="text-zone" name="champ-texte" rows="5" cols="8" placeholder="Décrivez l'évènement..."></textarea>
                </div>
            </div>
        
            <div class="text-center">
                <input type="submit" value="Enregistrer" name="Form-even">
            </div>

        </form>


















<?php
    require('footer.php');
?>


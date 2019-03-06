<?php

$titre = "Suruneligne - Agence de communication";

// Pour choisir le nombre d'image miniature qu'on l'on souhaite
$nb_images_miniature = 3;
// Pour choisir le nombre d'image qu'on l'on souhaite dans la bannière
$nb_images_bannieres = 3;

$page = 'contact';

?>

<?php include './inc/images.inc.php' ?>

<!DOCTYPE html>
<html lang="fr">

  <?php include './inc/head.inc.php' ?>

  <body>

    <?php include './inc/header.inc.php' ?>

    <main>
          <div class="blocbas">
            <div class="blocgauche">

                    <!-- Titre formulaire -->
                    <div id="titreformulaire">
                      <h2>Formulaire de contact</h2>
                    </div>
                    <!-- Formulaire -->
                    <div id="formulaire">
                            <form action="#" method="post">
                              <div class="ligne_form">
                                  <label id="civilite">Civilité : </label>
                                  <div id="boutonsradio">
                                    <input value="Madame" type="radio" id="civilite_madame" name="civilite" checked="checked">
                                    <label for="civilite_madame">Madame</label>
                                    <br />
                                    <input value="Monsieur" type="radio" id="civilite_monsieur" name="civilite">
                                    <label for="civilite_monsieur">Monsieur</label>
                                  </div>
                              </div>

                              <div class="ligne_form">
                                  <input class="textbox" type="text" placeholder="Votre nom *" name="lastname" id="lastname" required="required">
                                  <input class="textbox" type="text" placeholder="Votre prénom *" name="firstname" id="firstname" required="required">
                              </div>

                              <div class="ligne_form">
                                  <input class="textbox" type="tel" placeholder="Votre téléphone" name="tel" id="tel" >
                                  <input class="textbox" type="email" placeholder="Votre adresse email *" name="email" id="email" required="required">
                              </div>

                              <div class="ligne_form">
                                  <input class="textbox long" type="text" placeholder="Sujet *" name="subjet" id="subjet" required="required">
                              </div>

                              <div class="ligne_form">
                                  <textarea class="textbox long" placeholder="Votre message *" name="message" id="message" required="required"></textarea>
                              </div>
                            </form>
                    </div>
                    <!-- Bouton validation du formulaire -->
                    <div class="ligne_bouton">
                          <input class="bouton" type="submit" Value="Je valide ma demande" >
                    </div>

                    <h1>Comment nous joindre ?</h1>
                    <h3>Suruneligne</h3>
                    <p>121 Rue de Saintes<br />
                    16000 Angoulême<br />
                    06 51 83 31 21</p>


            </div>

            <?php include './inc/blocdroite.inc.php' ?>

          </div>

    </main>

    <?php include './inc/script.inc.php' ?>

  </body>
</html>
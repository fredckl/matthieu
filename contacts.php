<?php

$titre = "Suruneligne - Agence de communication";

?>

<?php include './inc/images.inc.php' ?>

<!DOCTYPE html>
<html lang="fr">

  <?php include './inc/head.inc.php' ?>

  <style>
    .menu_ouvert a:nth-child(2) {
      background-color:#21a1bc;
      color:#707070;
    }
  </style>

  <body>

    <?php include './inc/header.inc.php' ?>

    <main>
          <div class="blocbas">
            <div class="blocgauche">
              <div id="titreformulaire">
                <h2>Formulaire de contact</h2>
              </div>
              <div id="formulaire">
                <form action="#" method="post">
                  <div class="ligne_form">
                      <label id="civilite" for="civilite">Civilité : </label>
                      <div id="boutonsradio">
                        <input value="Madame" type="radio" id="civilite_madame" name="civilite" checked="checked">
                        <label for="civilite_madame">Madame</label>
                        <br/>
                        <input value="Monsieur" type="radio" id="civilite_monsieur" name="civilite">
                        <label for="civilite_monsieur">Monsieur</label>
                      </div>
                  </div>

                  <div class="ligne_form">
                      <input class="textbox" type="text" placeholder="Votre nom *" name="lastname" id="lastname" >
                      <input class="textbox" type="text" placeholder="Votre prénom *" name="firstname" id="firstname">
                  </div>

                  <div class="ligne_form">
                      <input class="textbox" type="tel" placeholder="Votre téléphone" name="tel" id="tel" >
                      <input class="textbox" type="email" placeholder="Votre adresse email *" name="email" id="email" >
                  </div>

                  <div class="ligne_form">
                      <input class="textbox long" type="text" placeholder="Sujet *" name="subjet" id="subjet" >
                  </div>

                  <div class="ligne_form">
                      <textarea class="textbox long" placeholder="Votre message *" name="message" id="message" ></textarea>
                  </div>

                </form>
              </div>
              <div class="ligne_bouton">
                    <input class="bouton" type="submit" Value="Je valide ma demande" >
              </div>
            </div>

            <?php include './inc/blocdroite.inc.php' ?>

          </div>

    </main>

    <?php include './inc/script.inc.php' ?>

  </body>
</html>
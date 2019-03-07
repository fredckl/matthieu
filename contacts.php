<?php

$titre = "Suruneligne - Agence de communication";

include __DIR__. '/inc/bootstrap.php';

include './gestion-formulaire.php';

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
                <form action="" method="post">
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
                    <input class="textbox long" type="text" placeholder="Votre nom *" name="lastname" id="lastname" >
                    <?php if(!empty($errors['lastname'])): ?>
                    <p><?php echo $errors['lastname'] ?></p>
                    <?php endif; ?>
                  </div>
                  <div class="ligne_form">
                    <input class="textbox long" type="text" placeholder="Votre prénom *" name="firstname" id="firstname" >
                    <?php if(!empty($errors['firstname'])): ?>
                    <p><?php echo $errors['firstname'] ?></p>
                    <?php endif; ?>
                  </div>
                  <div class="ligne_form">
                    <input class="textbox long" type="tel" placeholder="Votre téléphone" name="tel" id="tel" >
                  </div>
                  <div class="ligne_form">
                    <input class="textbox long" type="text" placeholder="Votre adresse email *" name="email" id="email" >
                    <?php
                      // Vérifie si la chaine ressemble à un email
                      //if (!empty($_POST['email'])) {
                        //if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                          //echo '';
                        //} else {
                          //echo '<p>Cet email n\'est pas correct.<p>';
                        //}

                      if(!empty($errors['email'])): ?>
                      <p><?php echo $errors['email'] ?></p>
                      <?php endif; ?>
                  </div>
                  <div class="ligne_form">
                    <input class="textbox long" type="text" placeholder="Sujet *" name="subjet" id="subjet" >
                    <?php if(!empty($errors['subjet'])): ?>
                    <p><?php echo $errors['subjet'] ?></p>
                    <?php endif; ?>
                  </div>
                  <div class="ligne_form">
                    <textarea class="textbox long" placeholder="Votre message *" name="message" id="message" ></textarea>
                    <?php if(!empty($errors['message'])): ?>
                    <p><?php echo $errors['message'] ?></p>
                    <?php endif; ?>
                  </div>

                  <?php
                    if (!empty($_POST) && empty($errors)) {
                      $texte = implode(', ', $_POST) . "\n";
                      $enregistrement=fopen("./enregistrement-formulaire.txt","a");
                      fwrite($enregistrement, $texte);
                      fclose($enregistrement);
                      //header('Location: contacts.php');
                      //echo "<script>alert(\"Votre demande a bien été prise en compte\")</script>";

                    }
                  ?>

                  <!-- Bouton validation du formulaire -->
                  <div class="ligne_bouton">
                    <input class="bouton" type="submit" Value="Je valide ma demande" >
                  </div>
                </form>
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
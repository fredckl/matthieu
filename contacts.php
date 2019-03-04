<?php

$titre = "Suruneligne - Agence de communication";

/*
$images = [
  [ 'src' => './img/image1.jpg',
    'grp' => 'roadtrip',
    'title' => 'Web & Digital',
  ],
  [ 'src' => './img/image2.jpg',
    'grp' => 'roadtrip',
    'title' => 'Evenementiel & Signalétique',
  ],
  [ 'src' => './img/image3.jpg',
    'grp' => 'roadtrip',
    'title' => 'Graphisme & Print',
  ],
];
*/


$path = './img/img_random/'; // Chemin vers le dossier contenant tes images (ne pas oublier le slash final)
$tab = scandir($path); // Place les images dans un tableau
$tab = array_slice($tab, 2);
shuffle($tab); // Mélange le tableau
$tab = array_slice($tab, 0, 3); // Garde les 6 premières images



?>

<!DOCTYPE html>
<html lang="fr">

  <?php include './inc/head.inc.php' ?>

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
                      <label id="etiqboutonsradio" for="civilite">Civilité : </label>
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
                    <input class="bouton" type="submit" Value="Je valide ma demande"></input>
              </div>
            </div>
            <div class="blocdroite">
                <?php echo '<div class="image">';
                  foreach($tab as $img)
                  echo '<a href="'.$path.$img.'" data-lightbox="roadtrip" data-title="Image Suruneligne"><img src="'.$path.$img.'" alt="Image Suruneligne" /></a>';
                  echo '</div>';
                ?>
            </div>
    </main>

    <?php include './inc/script.inc.php' ?>

  </body>
</html>
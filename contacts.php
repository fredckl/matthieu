<?php

$titre = "Suruneligne - Agence de communication";

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php echo "$titre" ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
  </head>
  <body>
    <header>
          <div class="logo">
            <img src="./img/logo.png" alt="logo"/>
          </div>
          <div class="menu">
            <a class="lien" href="./index.php">Accueil</a>
            <a class="lien" href="./contacts.php">Contacts</a>
          </div>
    </header>
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
                      <input value="Madame" type="radio" id="civilite" name="civilite" checked="checked">Madame </input> <br/>
                      <input value="Monsieur" type="radio" id="civilite" name="civilite">Monsieur</input>
                    </div>
                    <div class="fin">
                    </div>
                  </div>

                  <div class="ligne_form">
                    <input class="textbox" type="text" placeholder="Votre nom" name="nom" id="nom" >
                    <input class="textbox" type="text" placeholder="Votre prénom" name="pnom" id="pnom">
                    <div class="fin">
                  </div>
                  </div>

                  <div class="ligne_form">
                    <input class="textbox" type="tel" placeholder="Votre téléphone" name="tel" id="tel" >
                    <input class="textbox" type="email" placeholder="Votre adresse mail" name="email" id="email" >
                    <div class="fin">
                    </div>
                  </div>

                  <div class="ligne_form">
                    <input class="textbox long" type="text" placeholder="Sujet" name="suj" id="suj" >
                    <div class="fin">
                    </div>
                  </div>

                  <div class="ligne_form">
                    <input class="textbox long" type="textarea" placeholder="Votre message" name="mes" id="mes" >
                    <div class="fin">
                  </div>
                  </div>

                </form>
              </div>
              <div class="ligne_bouton">
                    <input class="bouton" type="submit" Value="Je valide ma demande"></input>
                  </div>
            </div>
            <div class="blocdroite">
              <div class="image">
                <img src="./img/image1.jpg" alt="image 1"/>
                <img src="./img/image2.jpg" alt="image 2"/>
                <img src="./img/image3.jpg" alt="image 3"/>
            </div>
          </div>
    </main>
  </body>
</html>
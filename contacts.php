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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>
  <body>
    <header>
          <div class="logo">
            <img src="./img/logo.png" alt="logo"/>
          </div>
          <div class="menu_ouvert">
              <a class="lien" href="./index.php">Accueil</a>
              <a class="lien" href="./contacts.php">Contacts</a>
              <div class="bouton_fermer"><a href="#"><i class="far fa-times-circle"></i></a></div>
          </div>
          <div class="menu_fermer">
              <div class="bouton_menu"><a href="#"><i class="fas fa-bars"></i></a></div>
          </div>
          <script src="./js/jquery.js"></script>
          <script src="./js/menu.js"></script>
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
                        <input value="Madame" type="radio" id="civilite_madame" name="civilite" checked="checked">
                        <label for="civilite_madame">Madame</label>
                        <br/>
                        <input value="Monsieur" type="radio" id="civilite_monsieur" name="civilite">
                        <label for="civilite_monsieur">Monsieur</label>
                      </div>
                  </div>

                  <div class="ligne_form">
                      <input class="textbox" type="text" placeholder="Votre nom" name="nom" id="nom" >
                      <input class="textbox" type="text" placeholder="Votre prénom" name="pnom" id="pnom">
                  </div>

                  <div class="ligne_form">
                      <input class="textbox" type="tel" placeholder="Votre téléphone" name="tel" id="tel" >
                      <input class="textbox" type="email" placeholder="Votre adresse mail" name="email" id="email" >
                  </div>

                  <div class="ligne_form">
                      <input class="textbox long" type="text" placeholder="Sujet" name="suj" id="suj" >
                  </div>

                  <div class="ligne_form">
                      <textarea class="textbox long" placeholder="Votre message" name="mes" id="mes" ></textarea>
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
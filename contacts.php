<?php

$titre = "Suruneligne - Agence de communication";

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php echo "$titre" ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <div class="bouton_fermer"><a href="#"></a></div>
          </div>
          <div class="menu_fermer">
              <div class="bouton_menu"><a href="#"><i class="fas fa-bars"></i></a></div>
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
              <div class="image">
                <a href="#zoom1"><img class="miniature" src="./img/image1.jpg" alt="image 1" /></a>
                    <div id="zoom1">
                        <img alt="image1" src="./img/image1.jpg">
                        <a href="./contact.php"><i class="far fa-window-close"></i></a>
                    </div>
                <a href="#zoom2"><img class="miniature" src="./img/image2.jpg" alt="image 2" /></a>
                    <div id="zoom2">
                        <img alt="image2" src="./img/image2.jpg">
                        <a href="./contact.php"><i class="far fa-window-close"></i></a>
                    </div>
                <a href="#zoom3"><img class="miniature" src="./img/image3.jpg" alt="image 3" /></a>
                    <div id="zoom3">
                        <img alt="image3" src="./img/image3.jpg">
                        <a href="./contact.php"><i class="far fa-window-close"></i></a>
                    </div>
            </div>
          </div>
    </main>

    <script src="./js/jquery.js"></script>
    <script src="./js/menu.js"></script>
  </body>
</html>
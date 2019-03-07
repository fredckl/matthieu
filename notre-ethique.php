<?php

$titre = "Suruneligne - Agence de communication";


include __DIR__. '/inc/bootstrap.php';

?>

<?php include './inc/images.inc.php' ?>

<!DOCTYPE html>
<html lang="fr">

  <?php include './inc/head.inc.php' ?>

  <body>

    <?php include './inc/header.inc.php' ?>

    <main>
          <div class="blochaut">
            <!-- Foreach permettant d'afficher les images de la bannière renvoyées depuis script.inc.php -->
            <?php foreach ($bannieres as $key => $banniere) { ?>
              <img src="<?php echo $banniere['src'] ?>" alt="<?php echo $banniere['title']?>"/>
            <?php } ?>
          </div>
          <div class="blocbas">
            <div class="blocgauche">
              <!-- Textes descriptifs -->
              <h1>L'agence</h1>
              <h2>Notre éthique ?</h2>
              <p>Pas de sous-traitance douteuse, ni de crowd-sourcing.<br />
              Pas d’arrangements avec d’autres prestataires pour le bien de notre portefeuille, notre seul intérêt : votre projet.<br />
              Nous entretenons une relation et collaboration positive, réactive, fluide et en souplesse avec vous et pour vous.<br />
              Une prise en charge globale de votre projet pour optimiser votre budget et vous offrir les services d’une véritable agence de communication.</p>
            </div>

            <?php include './inc/blocdroite.inc.php' ?>

          </div>

    </main>

    <?php include './inc/script.inc.php' ?>

  </body>
</html>
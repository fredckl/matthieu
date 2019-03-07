<!-- JOUR 6 -->

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
              <h1>Notre travail</h1>
              <h3>Création graphique, impression</h3>
              <p>Conception et réalisation de vos supports hors médias. De la création à la production, suruneligne travaille avec vous sur toutes les étapes de votre projet.</p>
              <h3>Création de sites web</h3>
              <p>Conception, webdesign, modélisation, développement (PHP, MySql, Jquery...), desktop, tablette et smartphone.<br />
              De l'idée à la mise en ligne, suruneligne vous accompagne sur vos projets digital.</p>
              <h3>Événementiels, grands formats</h3>
              <p>De la conception à la pose, Suruneligne vous accompagne sur l'organisation de vos évènements.</p>
            </div>

            <?php include './inc/blocdroite.inc.php' ?>

          </div>

    </main>

    <?php include './inc/script.inc.php' ?>

  </body>
</html>
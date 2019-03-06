<!-- JOUR 6 -->

<?php

$titre = "Suruneligne - Agence de communication";

// Pour choisir le nombre d'image miniature qu'on l'on souhaite
$nb_images_miniature = 3;
// Pour choisir le nombre d'image qu'on l'on souhaite dans la bannière
$nb_images_bannieres = 3;

$x = 'a';

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
              <h1>Qui sommes-nous ?</h1>
              <h2>L'agence</h2>
              <p>Depuis 2006 nous travaillons avec vous pour la réussite de vos projets.<br />
              Suruneligne est une agence de communication solidaire située en Charente près d’Angoulême.</p>
              <h3>Notre métier</h3>
              <p>Votre communication.<br />
              Suruneligne participe à votre stratégie de communication.<br />
              Suruneligne explore les meilleures pistes graphiques et les messages qui portent vos projets.<br />
              Des solutions complètes et adaptées à vos besoins ou des interventions ponctuelles selon vos envies.</p>
              <h3>Nos compétences</h3>
              <p>Suruneligne c’est des spécialistes de la communication, passionnés par la conception, la création, le graphisme et l’optimisation de vos messages sur le papier et sur le web.<br />
              Suruneligne c’est des personnes expertes dans leur domaine : impression, stratégie de communication, graphisme, webdesign, développement web et technologies multimédia.</p>
              <h3>Notre différence</h3>
              <p>L’engagement solidaire, chaque dossier confié à Suruneligne participe au bien-être collectif.<br />
              Chaque année Suruneligne décide de reverser une partie de son CA à une fondation et/ou se développe en définissant une stratégie solidaire.<br />
              Les salariés Suruneligne participent à la formation des futurs professionnels avec les acteurs locaux de la formation continue.</p>
            </div>

            <?php include './inc/blocdroite.inc.php' ?>

          </div>

    </main>

    <?php include './inc/script.inc.php' ?>

  </body>
</html>
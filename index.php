<!-- JOUR 6 -->

<?php

$titre = "Suruneligne - Agence de communication";

?>

<?php include './inc/images.inc.php' ?>

<!DOCTYPE html>
<html lang="fr">

  <?php include './inc/head.inc.php' ?>

  <style>
    .menu_ouvert a:first-child {
      background-color:#21a1bc;
      color:#707070;
    }
  </style>

  <body>

    <?php include './inc/header.inc.php' ?>

    <main>
          <div class="blochaut">
            <img src="<?php echo $bannieres[0]['src'] ?>" alt="<?php echo $bannieres[0]['title']?>"/>
            <img src="<?php echo $bannieres[1]['src'] ?>" alt="<?php echo $bannieres[1]['title']?>"/>
            <img src="<?php echo $bannieres[2]['src'] ?>" alt="<?php echo $bannieres[2]['title']?>"/>
          </div>
          <div class="blocbas">
            <div class="blocgauche">
              <h1>Qui sommes-nous ?</h1>
              <h2>L'agence</h2>
              <p>Depuis 2006 nous travaillons avec vous pour la réussite de vos projets.<br />
              Suruneligne est une agence de communication solidaire située en Charente près d’Angoulême.</p>
              <h3>Notre métier</h3>
              <p>Votre communication.<br />
              Suruneligne participe à votre stratégie de communication.<br />
              Suruneligne explore les meilleures pistes graphiques et les messages qui portent vos projets.<br />
              Des solutions complètes et adaptées à vos besoins ou des interventions ponctuelles selon vos envies.</p><br />
              <h3>Nos compétences</h3>
              <p>Suruneligne c’est des spécialistes de la communication, passionnés par la conception, la création, le graphisme et l’optimisation de vos messages sur le papier et sur le web.<br />
              Suruneligne c’est des personnes expertes dans leur domaine : impression, stratégie de communication, graphisme, webdesign, développement web et technologies multimédia.</p><br />
            </div>

            <?php include './inc/blocdroite.inc.php' ?>

          </div>

    </main>

    <?php include './inc/script.inc.php' ?>

  </body>
</html>
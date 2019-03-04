<!-- JOUR 5 -->

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
$tab = array_slice($tab, 0, 3); // Garde les 3 premières images


?>

<!DOCTYPE html>
<html lang="fr">

  <?php include './inc/head.inc.php' ?>

  <body>

    <?php include './inc/header.inc.php' ?>

    <main>
          <div class="blochaut">
            <img src="./img/imgcom.gif" alt="image communication"/>
            <img src="./img/imgcom.gif" alt="image communication"/>
            <img src="./img/imgcom.gif" alt="image communication"/>
          </div>
          <div class="blocbas">
            <div class="blocgauche">
              <h1>Qui sommes-nous ?</h1>
              <h2>L'agence</h2>
              <p>Depuis 2006 nous travaillons avec vous pour la réussite de vos projets.</br>
                Suruneligne est une agence de communication solidaire située en Charente près d’Angoulême.</p>
              <h3>Notre métier</h3>
              <p>Votre communication.</br>
                Suruneligne participe à votre stratégie de communication.</br>
                Suruneligne explore les meilleures pistes graphiques et les messages qui portent vos projets.</br>
                Des solutions complètes et adaptées à vos besoins ou des interventions ponctuelles selon vos envies.</br>
              <h3>Nos compétences</h3>
              <p>Suruneligne c’est des spécialistes de la communication, passionnés par la conception, la création, le graphisme et l’optimisation de vos messages sur le papier et sur le web.</br>
              Suruneligne c’est des personnes expertes dans leur domaine : impression, stratégie de communication, graphisme, webdesign, développement web et technologies multimédia.</br>

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
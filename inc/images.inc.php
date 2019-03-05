<?php

$images = [
  [ 'src' => './img/img_image_bloc_droite/petit_format/image1_petitformat.png',
    'lbox' => './img/img_image_bloc_droite/grand_format/image1_grandformat.png',
    'grp' => 'image',
    'title' => 'Web & Codage',
  ],
  [ 'src' => './img/img_image_bloc_droite/petit_format/image2_petitformat.png',
    'lbox' => './img/img_image_bloc_droite/grand_format/image2_grandformat.png',
    'grp' => 'image',
    'title' => 'Développement & Recherche',
  ],
  [ 'src' => './img/img_image_bloc_droite/petit_format/image3_petitformat.png',
    'lbox' => './img/img_image_bloc_droite/grand_format/image3_grandformat.png',
    'grp' => 'image',
    'title' => 'Référencement web',
  ],
  [ 'src' => './img/img_image_bloc_droite/petit_format/image4_petitformat.png',
    'lbox' => './img/img_image_bloc_droite/grand_format/image4_grandformat.png',
    'grp' => 'image',
    'title' => 'Web dynamique',
  ],
  [ 'src' => './img/img_image_bloc_droite/petit_format/image5_petitformat.png',
    'lbox' => './img/img_image_bloc_droite/grand_format/image5_grandformat.png',
    'grp' => 'image',
    'title' => 'Web & Digital',
  ],
  [ 'src' => './img/img_image_bloc_droite/petit_format/image6_petitformat.png',
    'lbox' => './img/img_image_bloc_droite/grand_format/image6_grandformat.png',
    'grp' => 'image',
    'title' => 'Développement web',
  ],
];

//$path = './img/img_random/'; // Chemin vers le dossier contenant tes images (ne pas oublier le slash final)
//$tab = scandir($path); // Place les images dans un tableau

$images = array_slice($images, 0);
shuffle($images); // Mélange le tableau
$images = array_slice($images, 0, 3); // Garde les 3 premières images

?>

<?php

$bannieres = [
  [ 'src' => './img/banniere_accueil/image_banniere1.png',
    'grp' => 'banniere',
    'title' => 'Image Communication 1',
  ],
  [ 'src' => './img/banniere_accueil/image_banniere2.png',
    'grp' => 'banniere',
    'title' => 'Image Communication 2',
  ],
  [ 'src' => './img/banniere_accueil/image_banniere3.png',
    'grp' => 'banniere',
    'title' => 'Image Communication 3',
  ],
];

$bannieres = array_slice($bannieres, 0);
shuffle($bannieres); // Mélange le tableau
$bannieres = array_slice($bannieres, 0, 3); // Garde les 3 premières images

?>


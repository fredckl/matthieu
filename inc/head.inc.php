<!-- Balise head des pages -->

<head>
    <title><?php echo "$titre" ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="./style.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="./dist/css/lightbox.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./img/logo.ico" />
    <link rel="stylesheet" type="text/css" href="./slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"/>

    <!-- Codage permettant d'avoir une couleur personnalisée lorsque l'on est sur la page concernée -->
    <?php
        if ($x === 'a') {
            include './inc/cssongleta.inc.php';
        } else {
            include './inc/cssongletb.inc.php';
        }
    ?>
  </head>
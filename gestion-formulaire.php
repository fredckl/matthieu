<?php

// Gestion de mon formulaire
if (!empty($_POST)) {
  $errors = [];

  if (empty($_POST['lastname'])) {
    $errors['lastname'] = 'Ce champ ne doit pas être vide';
  }

  if (empty($_POST['firstname'])) {
    $errors['firstname'] = 'Ce champ ne doit pas être vide';
  }

  if (empty($_POST['email'])) {
    $errors['email'] = 'Ce champ ne doit pas être vide';
  }

  if (empty($_POST['subjet'])) {
    $errors['subjet'] = 'Ce champ ne doit pas être vide';
  }

  if (empty($_POST['message'])) {
    $errors['message'] = 'Ce champ ne doit pas être vide';
  }
}

?>
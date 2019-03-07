<!-- Class blocdroite -->

<div class="blocdroite">
    <div class="image">

      <!-- Foreach permettant d'afficher les images renvoyées depuis script.inc.php -->
      <?php foreach ($images as $key => $image) { ?>
        <a href= "<?php echo $image['lbox'] ?>"  data-lightbox="<?php echo $image['grp'] ?>" data-title="<?php echo $image['title'] ?>"><img src="<?php echo $image['src'] ?>" alt="<?php echo $image['title']?>" /></a>
        <p><?php echo $image['title'] ?></p>
      <?php } ?>
    </div>
</div>

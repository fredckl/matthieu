<!-- Balise header des pages -->

<header>
      <div class="logo">
        <img src="./img/logo.png" alt="logo"/>
      </div>
      <div class="menu_ouvert">
          <a class="lien <?php echo isset($page) && $page === 'index' ? 'link-active' : ''?>" href="./index.php">Accueil</a>
          <a class="lien <?php echo isset($page) && $page === 'contacts' ? 'link-active' : ''?>" href="./contacts.php">Contacts</a>
          <a class="lien <?php echo isset($page) && $page === 'notre-travail' ? 'link-active' : ''?>" href="./notre-travail.php">Notre travail</a>
          <a class="lien <?php echo isset($page) && $page === 'notre-ethique' ? 'link-active' : ''?>" href="./notre-ethique.php">Notre éthique</a>
          <div class="bouton_fermer"><a href="#"></a></div>
      </div>
      <div class="menu_fermer">
          <div class="bouton_menu"><a href="#"><i class="fas fa-bars"></i></a></div>
      </div>
</header>
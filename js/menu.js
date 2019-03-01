jQuery(document).ready(function() {

  var $menuOuvert = $('.menu_ouvert');
  var $btnToggleMenu = $('.bouton_menu');
    $('.bouton_menu').click (function () {

      if ($menuOuvert.is(':visible')){
        $menuOuvert.removeClass('menu-show')

        $btnToggleMenu
        .find('i')
        .removeClass('fa-times')
        .addClass('fa-bars')

      } else {
        $menuOuvert.addClass('menu-show')

        $btnToggleMenu
        .find('i')
        .removeClass('fa-bars')
        .addClass('fa-times')
      }
    });
});



/*
jQuery(document).ready(function()
{ $('.bouton_menu').click (function ()
    {  $('.menu_ouvert').show(), $('.bouton_menu').hide();
    $('.bouton_fermer').click (function ()
    { $(".menu_ouvert").hide(), $('.bouton_menu').show();
    });
  });
});
*/
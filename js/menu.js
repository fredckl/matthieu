jQuery(document).ready(function()
{ $('.bouton_menu').click (function ()
    {  $('.menu_ouvert').show(), $('.bouton_menu').hide();
    $('.bouton_fermer').click (function ()
    { $(".menu_ouvert").hide(), $('.bouton_menu').show();
    });
  });
});

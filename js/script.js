jQuery(document).ready(function($) {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            // Réduire la taille du menu et afficher seulement #navigation
            $('#header').addClass('menu-reduit');
            $('.logo') .addClass('logo-reduit');
        } else {
            // Retirer la classe quand l'utilisateur est en haut de la page
            $('#header').removeClass('menu-reduit');
            $('.logo').removeClass('logo-reduit');
        }
    });
    $(window).scroll(function() {
      // Vérifie la largeur de l'écran
      if ($(window).width() >= 1024) {
          if ($(this).scrollTop() > 100) {
              // Réduire la taille du menu et afficher seulement #navigation
              $('#header').addClass('menu-reduit');
              $('.logo') .addClass('logo-reduit');
          } else {
              $('#header').removeClass('menu-reduit');
              $('.logo').removeClass('logo-reduit');
          }
          } else {
              $('#header').removeClass('menu-reduit');
              $('.logo').removeClass('logo-reduit');
          }
    });
});


/********************JS TOP BUTTON*******************/

let mybutton = document.getElementById("myBtn");


window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

/********************JS TOP BUTTON*******************/



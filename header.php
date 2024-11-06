<!doctype html> 
<html lang="fr-FR">  
<head> 
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-PH8XKMNC');</script>
  <!-- End Google Tag Manager -->
	<meta charset="utf-8" /> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
  <link rel='stylesheet' href="<?php bloginfo('template_url'); ?>/smallscreen.css" />
  <link rel='stylesheet' href="<?php bloginfo('template_url'); ?>/mediumscreen.css" />
  <link rel='stylesheet' href="<?php bloginfo('template_url'); ?>/bigscreen.css" />
    
	<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
 <?php wp_head() ?>

</head>

<body <?php body_class();?>>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PH8XKMNC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php
        $datetimeheader= get_field("horaires_headerfooter", 106);
        $phoneheaderfooter= get_field("numero_headerfooter", 106);
        $translate= get_field('[gtranslate]');

?>


<div class="container">
    <header id="header" role="banner">
    <div id="box1">
      <!--Ici commence le Header-->
	  <a href="<?php bloginfo ("url")?>">
		<img class="logo" alt="logo du site infirmier à domicile" src="<?php bloginfo('template_url');?>/images/logotransp.png"/>
	  </a>
		<!--Ici se termine le Header-->

      <!--nav start -->
        <div id="bannernav">
          <p id="horaires"><?php echo $datetimeheader; ?></p>
          <a id="phone" href="tel:+41768013534"><?php echo $phoneheaderfooter; ?></a>
          
          <!-- Menu Hamburger -->
          <div class="hamburger-menu">
          <input id="menu__toggle" type="checkbox" />
          <label class="menu__btn" for="menu__toggle">
          <span></span>
          </label>

          <?php
          wp_nav_menu(array(
          'theme_location' => 'primary', // Utiliser le même menu 'primary'
          'menu_id'        => 'burger-menu', // ID du menu burger
          'menu_class'     => 'menu__box', // Classe CSS pour le style du menu burger
          'container'      => false, // Pas de conteneur supplémentaire
          'depth'          => 1, // Limite à un seul niveau de sous-menus
          ));
          ?>
          
          </div>
        </div>
          <nav id="navigation" role="navigation">
		      <?php 
		      wp_nav_menu(array("menu" => "Principale", "menu_id" => "menu"));
		      ?>
        
          </nav> 
        </div>
    </header>
</div>



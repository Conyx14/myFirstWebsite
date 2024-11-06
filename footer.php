<?php
        $datetimeheader= get_field("horaires_headerfooter",106);
        $phoneheaderfooter= get_field("numero_headerfooter",106);

?>
<!--Ici commence le Footer-->
<footer id="footer" role="contentinfo">
      <div class="container">
        <div id="box2">
  
          <div id="horairesFooter">
          <h4>HORAIRES</h4>
          <img src="<?php bloginfo('template_url');?>/images/Iconhoraires.svg" alt="Logo horaires" />
          <p><?php echo $datetimeheader; ?></p>
          </div>
          <div id="contact">
          <h4>CONTACT</h4>
          <img src="<?php bloginfo('template_url');?>/images/logotelephonefooter.svg" alt="Logo téléphone" />
          <p><?php echo $phoneheaderfooter; ?></p>
          </div>
          <div id="secretariat">
          <h4>SECRETARIAT</h4>
          <img src="<?php bloginfo('template_url');?>/images/logosecretariatfooter.svg" alt="Logo secrétariat" />
          <address>Cours des Bastions 13, 1205 Genève, Suisse</address>
          </div>
          </div>
        </div>
        <div id="box3">
          <img class="logo2" alt="logo du site infirmier à domicile" src="<?php bloginfo('template_url');?>/images/logocopieremovebgpreview.png"/>
          <nav id="navFooter">
          <ul id="menuNav">
          <?php
          wp_nav_menu(array("menu" => "Principale", "navFooter" => "menuNav"));
          ?>
          </nav>
          <div id="Polcookies">
          <div id="middleFooter">
          <a href="<?php echo get_permalink(get_page_by_path('politique-de-confidentialite')); ?>">Politique de confidentialité</a>
          </div>
          <p><small>Copyright &copy; 2024 Infirmier à domicile - Tous droits réservés</small></p>
        </div>
      </div>
    </footer>
    <!--Ici se termine le Footer-->
  </div>
  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top"><svg class="topbutton" xmlns="http://www.w3.org/2000/svg" width="48" height="48" id="arrow-up">
  <path d="M24 46C11.85 46 2 36.15 2 24S11.85 2 24 2s22 9.85 22 22-9.85 22-22 22zm0-4c9.941 0 18-8.059 18-18S33.941 6 24 6 6 14.059 6 24s8.059 18 18 18zm7.586-12.586L24 21.828l-7.586 7.586a2 2 0 0 1-2.828-2.828l9-9a2 2 0 0 1 2.828 0l9 9a2 2 0 0 1-2.828 2.828z"></path>
</svg></button>
	 <?php wp_footer() ?>
   

</body>
</html>
<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>

<?php
        $datetimeheader= get_field("horaires_headerfooter", 106);
        $phoneheaderfooter= get_field("numero_headerfooter", 106);

?>

<!--Main start-->
<main>
      <section class="banner1">
      <div class="firstbanner-containera6">
      
        <div class="text4">
        <h1>Contactez votre infirmier à domicile</h1>
        <h2>Obtenez une réponse rapide pour vos besoins de soins à domicile</h2>
        <div class="button3">
        <a class="button_style5" href="tel:+410768013534">Appeler</a>
        </div>
        </div>
        </div>
      </section>

      <div class="slogancontact_container">
        <div class="iconcontact_container">
        <img src="<?php bloginfo('template_url');?>/images/phone (4) 1.svg" alt="icon d'un téléphone">
        <img src="<?php bloginfo('template_url');?>/images/whats-app 1.svg" alt="icon de what's app">
        <img src="<?php bloginfo('template_url');?>/images/email (1) 1.svg" alt="icon d'un email">
        </div>
       <h3>3 Moyens simples de me contacter</h3> 
      </div>
      <div class="contactform_container">
      <?php echo do_shortcode('[contact-form-7 id="bebcc54" title="Contact form 1"]');?>
      <div class="contactdetails_container">
      <section>
        <h4>CONTACT</h4>
        <div class="contactphoneicon">
        <img src="<?php bloginfo('template_url');?>/images/phoneiconwhite.svg" alt="">
        <p><?php echo $phoneheaderfooter; ?></p>
        </div>
        <h4>HORAIRES</h4>
        <div class="contacttimeicon">
        <img src="<?php bloginfo('template_url');?>/images/horairesiconwhite.svg" alt="">
        <!--PHP DAVID--> 
        <p><?php echo $datetimeheader; ?></p>
        <!--PHP DAVID--> 
        </div>
        <h4>SECRETARIAT</h4>
        <div class="contactaddressicon">
        <img src="<?php bloginfo('template_url');?>/images/addressiconwhite.svg" alt="">
        <div class="addressbox">
        <address>Cours des Bastions 13, 1205 Genève, Suisse</address>
        </div>
        </div>
      </section>
    </div>
    </div>
    </main>
    <!--Main end-->


<?php get_footer(); ?>
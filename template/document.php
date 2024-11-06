<?php /* Template Name: Document */ ?>

<?php get_header(); ?>

<?php 
    $datetimebanner= get_field("horaires_et_joursbanner", 106);
?>

<!--Ici commence le main-->
<main>
<div class="firstbanner-containera5">
  <div class="text">
  <h1>Téléversez vos documents médicaux</h1>
  <h2>Envoyez vos documents pour vos soins à domicile</h2>
  </div>
  </div>
  </section>
  <section>
    <div class="securityparagraph">
    <img src="<?php bloginfo('template_url');?>/images/security 1.svg" alt="Logo de téléchargement sécurisé des documents">
    <h3>Téléversement sécurisé de vos données médicales</h3>
    <div class="button6">
    <?php echo do_shortcode( '[contact-form-7 id="a796291" title="Document"]'); ?>
    </div>
    <p>Dans cette section, vous pouvez facilement téléverser et envoyer vos documents médicaux nécessaires pour organiser vos soins infirmiers à domicile à Genève.<br> 
      <br>La sécurité de vos informations est notre priorité :<br> 
      <br>Tous les fichiers que vous téléversez sont protégés et traités de manière confidentielle, assurant ainsi la confidentialité de vos données personnelles et médicales. Que vous ayez besoin de transmettre des prescriptions, des rapports médicaux, ou des formulaires de consentement, notre système sécurisé garantit que vos documents sont entre de bonnes mains.<br> 
      <br>N'hésitez pas à téléverser vos fichiers en toute confiance pour une prise en charge rapide et efficace de vos soins.<br> 
      <br>Le fichier téléversé doit être au format jpeg, png ou pdf et ne pas dépasser 10MB.</p>
  </section>
  <section class="smallbanner">
    <div class="smallbanner-container">
    <h4>Services de soins infirmiers à domicile dans le canton de Genève</h4>
    <!--PHP DAVID--> 
    <p><?php echo $datetimebanner ?></p>
    <!--PHP DAVID--> 
  </div>
  <div class="button5">
    <a class="button_style7" href="<?php echo get_permalink(115); ?>">Contacter</a>
  </div>
  </section>
  <!--Ici se termine le main-->



<?php get_footer(); ?>
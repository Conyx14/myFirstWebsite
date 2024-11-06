<?php /* Template Name: Accueil */ ?>


<?php get_header(); ?>

<?php
        $titlegauchesection1= get_field("title_gauche_section1",106);
        $title2gauchesection1= get_field("title2_gauche_section1",106);
        $titlecentresection1= get_field("title_centre_section1",106);
        $title2centresection1= get_field("title2_centre_section1",106);
        $titledroitesection1= get_field("title_droite_section1",106);
        $title2droitesection1= get_field("title2_droite_section1",106);
        $colonnegauchesection1= get_field("colonne_gauche_section1",106);
        $colonnedroitesection1= get_field("colonne_droite_section1",106);
        $colonnecentresection1= get_field("colonne_centre_section1",106);
        $bloccentre= get_field("bloc_centre",106);
	?>

 <main id="mainid">


 <section class="banner1">
        <div class="firstbanner-containera1">
        <div class="text">
        <h1>Infirmier à domicile</h1>
        <h2>Consultations infirmières à domicile dans le canton de Genève</h2>
        </div>
        <div class="button2">
        <a class="button_style1" href="tel:+410768013534">Appeler</a>
        <a class="button_style2" href="<?php echo get_permalink(93); ?>">Services</a>
        </div>
        </div>
      </div>
      </section>

      <div class="containerparagraph">
      <section class="column3">
        <div class="paragraph1main">
          <div class="paragraph1">
          <div class="titlelogo1">
        <img class="icon_paragraph"
          src="<?php bloginfo('template_url');?>/images/logoevaluationconseil.svg"
          alt="Logo evaluation et conseil"
        />
        <h3><?php echo $titlegauchesection1; ?></h3>
        <h3><?php echo $title2gauchesection1; ?></h3>
      </div>
      
        <p>
          <?php echo $colonnegauchesection1 ?>
        </p>
      </div>
        



        <div class="paragraph2">
          <div class="titlelogo1">
        <img class="icon_paragraph"
          src="<?php bloginfo('template_url');?>/images/logoexamenstraitement.svg"
          alt="Logo examens traitement"
        />
        <h3><?php echo $titlecentresection1; ?></h3>
        <h3><?php echo $title2centresection1; ?></h3>
      </div>
        <p>
        <?php echo $colonnecentresection1 ?>
        </p>
        </div>
        <div class="paragraph3">
        <div class="titlelogo1">
        <img class="icon_paragraph"
          src="<?php bloginfo('template_url');?>/images/logosoinsdebase.svg"
          alt="Logo soins de base maintien à domicile"
        />
        <h3><?php echo $titledroitesection1; ?></h3>
        <h3><?php echo $title2droitesection1; ?></h3>
        </div>
        <p>
        <?php echo $colonnedroitesection1 ?>
        </p>
        </div>
        </div>
  <div class="button3">
  <a class="button_style4" href="<?php echo get_permalink(93); ?>">Voir toutes mes prestations</a>
  </div>
</section>
<section id="tarifsbanner">
  <div class="column1">
  <h3>Tarifs</h3>
  <p>Les prestations de soins infirmiers à domicile sont couvertes par l'assurance-maladie de base (LAMal). Les montants facturés aux assureurs sont définis dans l’OPAS, art 7a (Ordonnance sur les prestations de l’assurance des soins). Les prestations comprennent: l’évaluation des besoins en soins, les conseils et la coordination; les examens et les traitements; et l'assistance pour les activités quotidiennes essentielles, afin de garantir une prise en charge complète et personnalisée.</p>
  </div>
</section>
</div>

<section class="banner2">
  <div class="secondbanner-containerb1">
  <div class="text2">
  <h3>Infirmier à domicile est un service dédié aux soins dans le canton de Genève aux personnes ne pouvant pas se déplacer</h3>
  </div>
  <div>
  <a class="button_style5" href="<?php echo get_permalink(115); ?>">Me contacter</a>
  </div>
</div>
</section>
<!-- INTEGRER LES LOGOS DES PARTENAIRES SOUS FORME DE CARROUSSEL QUI DEFILE TOUT SEUL-->
<section class="logopartner-banner">
  <h3 class="logopartnerslogan">"Ils me font confiance"</h3>
  <div class="logo-banner">
	<div class="logo-slider">
        <a href="https://www.proximos.ch/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/logo-proximos.png" alt="Logo Proximos.ch"></a>
        <a href="https://asi-ge.ch/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/asi-ge-logo.png" alt="Association Suisse des infirmiers et infirmières"></a>
        <a href="https://curacasa.ch/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/curacasa.png" alt="Logo Curacasa"></a>
        <a href="https://www.hug.ch/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/logo-hug.svg" alt="Logo des HUG"></a>
        <a href="https://www.assistemps.ch/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/logoAssistemps_Web.png" alt="Logo Assistemps"></a>
        <a href="https://unilabs.ch/fr/" target="_blank"><img src="<?php bloginfo('template_url');?>/images/logo-unilabs.svg" alt="Logo Unilabs"></a>
	</div>
</div>
</section>
<!-- intégrer avis google -->

</main>

	

<?php get_footer(); ?>
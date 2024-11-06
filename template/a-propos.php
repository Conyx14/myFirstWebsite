<?php /* Template Name: A propos */ ?>

<?php 
get_header(); 
?>

<?php
        $datetimebanner= get_field("horaires_et_joursbanner", 106);
        $declarationtitle= get_field("declarationtitre_a_propos");
        $declarationparagraph= get_field("declarationparagraph_a_propos");
        $whoamI = get_field('qui_suis-je');
        $diploma = get_field('diplomes');
        $certificate = get_field('certificats');
        $imgprofile = get_field('image_profile');

?>

<!--Ici commence le main-->
<main>
    <section class="banner1">
      <div class="firstbanner-containera2">
      <div class="text">
      <h1>Service d'infimier à domicile sur mesure</h1>
      <div class="button1">
      <a class="button_style3" href="tel:+410768013534">Prenez rendez-vous</a>
      </div>
      </div>
      </div>
    </section>

    <section>
      <div class="logoheadmain">
      <img src="<?php bloginfo('template_url');?>/images/pageaproposlogobienetre.svg" alt="Logo de bien-être" />
      </div>
      <div class="column1">
      <h2><q><?php echo $declarationtitle; ?></q></h2>
      <p>
      <?php echo $declarationparagraph; ?>
      </p>
      </div>
    </section>
    <section>
      <div class="davidprofilfirstpart-container">
        <div class="leftsideprofil-container">
      <img class="davidprofil" src="<?php echo esc_url($imgprofile); ?>" alt="Image de David"/>
      <h3>Personnalisation</h3>
      <p>
        Je fournis des soins personnalisés, prenant le temps de comprendre en
        profondeur les besoins et les attentes de chaque patient. Chaque soin
        est pensé pour refléter les préférences et les conditions uniques de
        ceux que je sers.
      </p>
      <h3>Engagement</h3>
      <p>Je fais preuve d'un engagement total envers la qualité de vie de mes patients. Mon dévouement se traduit par une présence constante, une fiabilité absolue et une volonté inébranlable de soutenir mes patients dans tous les aspects de leur soin.</p>
      </div>
      <div class="rightsideprofil-container">
      <h3>Adaptabilité</h3>
      <p>
        Je m'adapte aux besoins spécifiques de chaque patient, en ajustant mes
        soins en permanence pour offrir un soutien optimal dans leur
        environnement. Mon approche dynamique me permet de répondre rapidement
        aux changements de conditions et de situations.
      </p>
      <h3>Empathie</h3>
      <p>
      J'apporte une attitude positive et pleine d'empathie dans tous mes services. Mon engagement est de créer un environnement de soins chaleureux et compatissant, favorisant le bien-être émotionnel et physique de mes patients.
      </p>
      <h3>Respect</h3>
      <p>
        Je respecte profondément chaque patient et leur environnement, adoptant
        des pratiques de soins qui favorisent le respect de la dignité, de la
        vie privée et des souhaits de chacun. Je m'engage à promouvoir des soins
        qui sont à la fois professionnels et humains.
      </p>
      <div class="sign">
      <cite class="signature">David, votre infirmier</cite>
      </div>
      </div>
    </div>
    </section>

    <section class="smallbanner">
      <div class="smallbanner-container">
      <h3>
        Votre infirmier à domicile se déplace sur tout le canton de Genève
      </h3>
      <p><?php echo $datetimebanner ?></p>
      </div>
      <div class="button4">
      <a class="button_style6" href="<?php echo get_permalink(115); ?>">Contactez-moi</a>
      </div>
    </section>

      <section class="davidprofilsecondpart-container">
      <h3>Qui suis-je?</h3>
      <p><?php echo $whoamI ?></p>
    </section>

    <section class="diploma">
      <div class="diplomaimg-container">
      <img class="diplomaimg" src="<?php bloginfo('template_url');?>/images/diplomaicon.svg" alt="Logo de diplome">
      </div>
      <div class="diplcertif-container">
      <div class="diploma-container">
      <?php echo $diploma ?>
      </div>
    <div class="certificate-container">
    <?php echo $certificate ?>
    </div>
  </div>
    </section>
    </main>
    <!--Ici se termine le main-->

    <?php get_footer(); ?>
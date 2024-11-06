<?php /* Template Name: Prestations */ ?>

<?php get_header(); ?>

<?php
  $firstparagraphprest = get_field('premier_paragraphe');
  $secondparagraphprest = get_field('deuxieme_paragraphe_prestations');
  $thirdparagraphprest = get_field('troisieme_paragraphe_prestations');
  $datetimebanner= get_field("horaires_et_joursbanner", 106);
?>

  <!--Ici commence le main-->
  <main>
      <section class="banner1">
        <div class="firstbanner-containera3">
        <div class="text">
        <h1>Service de soins à domicile</h1>
        <h2>Service d’infirmier à domicile à Genève</h2>
        <div class="button2">
        <a class="button_style2" href="tel:+410768013534">Appeler</a>
        <a class="button_style1" href="<?php echo get_permalink(96); ?>">Tarifs</a>
        </div>
        </div>
        </div>
      </section>
      <section class="prestations">
        <div class="firstparagraph_prestations">
        <div class="firstparagraph_titleimg">
        <div class="iconprestations">
        <img src="<?php bloginfo('template_url');?>/images/iconaide.svg" alt="Icon aide infirmier"/>
        <!--PHP DAVID--> 
        </div>
        <div>
        </div>
        <h3>Demande d'aide pour les soins infirmiers</h3>
        </div>
        <div class="animation1 listbullets">
        <?php echo $firstparagraphprest; ?>
        </div>
        <?php echo $secondparagraphprest; ?>
        <div class="listbullets">
        <?php echo $thirdparagraphprest; ?>
        </div>
        </div>
      <!--PHP DAVID--> 
      </section>
      <section>
        <div class="secondbanner-containerb3">
        <div class="text3">
        <h3>Membre de l’association Suisse des infirmières et infirmiers</h3>
        <img
          src="<?php bloginfo('template_url');?>/images/logoasige.svg"
          alt="Logo de l'association Suisse des infirmières et infirmiers"
          width="100px"
          height="auto"
        />
        <h4>
          Membre de l'Association Suisse des Infirmières et Infirmiers (ASI),
          j'adhère aux normes les plus élevées de qualité et de
          professionnalisme dans les soins infirmiers. Cela garantit à mes
          patients des soins de haute qualité, un engagement continu dans le
          développement de mes compétences, et l'accès à des ressources
          spécialisées qui améliorent leur expérience et leur bien-être.
        </h4>
      </div>
      </div>
      <section class="prestations">
        <div class="firstparagraph_prestations">
        <div class="firstparagraph_titleimg">
        <div class="iconprestations">
        <img src="<?php bloginfo('template_url');?>/images/logoevaluationconseil.svg" alt="Logo evaluation et conseil"/>
        </div>
        <h3>Evaluation et conseil</h3>
        </div>
        <h4>L'évaluation, le conseil et la coordination</h4>
        <p>
          Evaluation des besoins du patient et de son
          environnement; Planification des mesures nécessaires.
        </p>
        <p>
          Conseils au patient ainsi que, le cas échéant, aux intervenants non
          professionnels pour les soins, en particulier quant à la manière de
          gérer les symptômes de la maladie, pour l’administration des
          médicaments ou pour l’utilisation d’appareils médicaux.
        </p>
        <p>
          Contrôles nécessaires, coordination des mesures et dispositions par
          des infirmiers spécialisés en lien avec des complications dans des
          situations de soins complexes et instables.
        </p>
      </div>
      </section>
      <section>
        <div class="secondparagraph_prestations">
        <div class="firstparagraph_titleimg">
        <div class="iconprestations">
        <img
          src="<?php bloginfo('template_url');?>/images/logoexamenstraitement.svg"
          alt="Logo examens traitement"
        />
        </div>
        <h3>Examen et traitement</h3>
        </div>
        <div class="colcontainer">
        <div class="colgauche_prestations">
        <p>
          Contrôle des signes vitaux (tension artérielle, pouls, température,
          respiration, poids).<br/>
          <br/>Test simple du glucose dans le sang ou l’urine, prélèvement pour
          examen de laboratoire.<br />
          <br/>Mesures thérapeutiques pour la respiration (telles que
          l’administration d’oxygène, les inhalations, les exercices
          respiratoires simples, l’aspiration).<br />
          <br/>Pose de sondes et de cathéters, ainsi que les soins qui y sont
          liés.<br />
          <br/>Soins en cas de dialyse péritonéale.<br />
          <br/>Préparation et administration de médicaments ainsi que documentation
          des activités qui leur sont associées.<br />
          <br/>Soins destinés à la mise en oeuvre au quotidien de la thérapie du
          médecin, tels que l’exercice de stratégies permettant de gérer la
          maladie et l’instruction pour la gestion des agressions, des angoisses
          et des idées paranoïaques.
        </p>
      </div>
      <div class="coldroite_prestations">
        <p>
          Administration entérale ou parentérale de solutions nutritives.<br />
          <br/>Surveillance de perfusions, de transfusions ou d’appareils servant au
          contrôle et au maintien des fonctions vitales ou au traitement
          médical.<br />
          <br/>Rinçage, nettoyage et pansement de plaies (y compris les escarres et
          les ulcères) et de cavités du corps (y compris les soins pour
          trachéostomisés et stomisés), soins pédicures pour les diabétiques.<br />
          <br/>Soins en cas de troubles de l’évacuation urinaire ou intestinale, y
          compris la rééducation en cas d’incontinence.<br />
          <br/>Assistance pour des bains médicinaux partiels ou complets, application
          d’enveloppements, cataplasmes et fangos.
        </p>
      </div>
    </div>
        </div>
      </section>
      <section class="thirdparagraph_prestations">
        <div class="firstparagraph_prestations">
          <div class="firstparagraph_titleimg">
          <div class="iconprestations">
        <img
          src="<?php bloginfo('template_url');?>/images/logosoinsdebase.svg"
          alt="Logo soins de base maintien à domicile"
        />
        </div>
        <h3>Soins de base et maintien à domicile</h3>
      </div>
        <h4>Les soins de base et l’aide au maintien à domicile :</h4>
        <p>
          Soins de base généraux pour les patients dépendants, tels que : bander
          les jambes du patient, lui mettre des bas de compression, refaire son
          lit, l’installer, lui faire faire des exercices, le mobiliser,
          prévenir les escarres, prévenir et soigner les lésions de la peau
          consécutives à un traitement ; aider aux soins d’hygiène corporelle et
          de la bouche ; aider le patient à s’habiller et à se dévêtir, ainsi
          qu’à s’alimenter.<br />
        </p>
        <p>
          Mesures destinées à surveiller et à soutenir les malades psychiques
          pour accomplir les actes ordinaires de la vie, telles que la
          planification et la structuration de leurs journées de manière
          appropriée, l’établissement et la promotion des contacts sociaux par
          un entraînement ciblé et le soutien lors de l’utilisation d’aides à
          l’orientation et du recours à des mesures de sécurité.
        </p>
        <cite
          >Source: Selon l’ordonnance du DFI sur les prestations dans
          l’assurance obligatoire des soins en cas de maladie</cite
        >
        </div>
       </section>
      </section>
       <section class="smallbanner">
        <div class="smallbanner-container">
        <h2>
          Services de soins infirmiers à domicile dans le canton de Genève
        </h2>
        <!--PHP DAVID--> 
        <p><?php echo $datetimebanner ?></p>
        <!--PHP DAVID--> 
        </div>
        <div class="button5">
        <a class="button_style7" href="<?php echo get_permalink(115); ?>">Prendre rendez-vous</a>
        </div>
      </section>

      <!-- A VOIR SI SECTION GARDéE ET UTILE POUR LES RéFéRENCEMENT-->
      <section class="zoneintervention">
        <h2>La zone d'intervention sur le canton de Genève comprend les communes suivantes:</h2>
        <p>Genève, Lancy, Carouge, Onex, Vernier, Meyrin, Grand-Saconnex, Thônex, Chêne-Bougeries, Chêne-Bourg, Cologny</p>
        <p>Bernex, Confignon, Satigny, Cartigny, Russin, Aire-la-Ville, Soral, Laconnex, Avully, Avusy, Dardagny, Perly-Certoux</p>
        <p>Veyrier, Plan-les-Ouates, Troinex, Collonge-Bellerive, Bardonnex, Jussy, Meinier, Presinge, Puplinge, Gy</p>
        <p>Versoix, Bellevue, Genthod, Pregny-Chambésy, Collex-Bossy</p>
    </section>
      <!-- A VOIR SI SECTION GARDéE ET UTILE POUR LES RéFéRENCEMENT-->

    </main>
    <!--Ici se termine le main-->




<?php get_footer(); ?>
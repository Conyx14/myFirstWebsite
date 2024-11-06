<?php /* Template Name: Tarifs */ ?>

<?php get_header(); ?>

<?php 
    $paragraphe_tarifs = get_field ('paragraphe_tarifs_des_soins');
    $prix_exemple = get_field ('prix_et_exemple');
    $datetimebanner= get_field("horaires_et_joursbanner", 106);
?>

 <!--Ici commence le main-->
 <main>
 <section class="banner1">
      <div class="firstbanner-containera4">
      <div class="text">
      <h1>Tarifs</h1>
      <h2>Tarifs réglementés et prestations prises en charge par les assurances de base </h2>
      <div class="button2">
      <a class="button_style1" href="tel:+410768013534">Contacter</a>
      <a class="button_style2" href="<?php echo get_permalink(93); ?>">Services</a>
      </div>
      </div>
      </div>
      </section>

      <div class="tarifs-container">
      <section class="tarifs firstparahraph_prestations">
        <h1>Tarifs des soins Infirmiers à domicile à Genève</h1>
        <p>En tant qu'infirmier à domicile à Genève, mes prestations de soins sont couvertes par l'assurance de base (LAMal) et l'assurance-accidents (LAA), sous certaines conditions. </p>
        <p>Voici un aperçu des modalités de prise en charge et des tarifs appliqués :</p>
      </section>

      <div class="containerparagraph1">
        <div class="firstparagraph">
        <div class="firstparagraph_titleimg">
        <img src="<?php bloginfo('template_url');?>/images/logopagetarifspriseencharge.svg" alt="Logo prise en charge par les assurances de base">
        <h4> Prise en charge par les assurances de base (LAMal) et assurance-accidents (LAA)</h4>
        </div>
          <p>Les soins infirmiers à domicile peuvent être remboursés par l'assurance de base (LAMal) si les
          conditions suivantes sont remplies :<br>
          
          <br>Prescription médicale : Les soins doivent être prescrits par un médecin, qui détermine la nature et la
          fréquence des soins nécessaires.<br>
          <br>Type de soins :<br> Les soins de base, les soins de traitement, ainsi que certains soins palliatifs peuvent
          être couverts.
          Pour les soins infirmiers à domicile requis à la suite d'un accident, l'assurance-accidents (LAA) prend
          en charge les prestations, à condition qu'elles soient médicalement justifiées et prescrites par un
          médecin.<br>
          
          <br>Note :<br> La franchise annuelle et la quote-part restent à la charge du patient, conformément aux
          conditions de l'assurance de base ou de l’assurance-accidents.<br>
          
          La loi sur l’Assurance maladie (LAMal) prévoit une contribution personnelle aux soins de 8chf par
          jour d’intervention.
          Les personnes au bénéfice du service des prestations complémentaires (SPC) en
          sont exemptées.</p>
        </div>

        <div class="firstparagraph">
        <div class="firstparagraph_titleimg">
          <img src="<?php bloginfo('template_url');?>/images/logopagetarifstarifsdessoins.svg" alt="Logo tarifs des soins à domicile">
          <!--PHP DAVID--> 
          <h4>Tarifs des soins Infirmiers à domicile</h4>
        </div>
          <?php echo $paragraphe_tarifs; ?>
          <div class="prices">
          <?php echo $prix_exemple; ?>
          </div>
        </div>
        </div>
        </div>
        <section class="smallbanner">
        <div class="smallbanner-container">
        <h4>Services de soins infirmiers à domicile dans le canton de Genève</h4>
        <!--PHP DAVID--> 
        <p><?php echo $datetimebanner ?></p>
        <!--PHP DAVID--> 
      </div>
      <div class="buttoncontainer">
      <div class="button5">
        <a class="button_style7" href="tel:+410768013534">Appeler</a>
      </div>
      </div>
      </section>

      <div class="tarifs-container">
      <div class="firstparagraph">
      <div class="firstparagraph_titleimg">
      <img src="<?php bloginfo('template_url');?>/images/pagestarifsassurancesinternationales.svg" alt="Logo des assurances internationales">
      <h4>Assurances internationales</h4>
      </div>
      <p>Pour les assurés internationaux, les soins infirmiers à domicile sont facturés selon les tarifs en vigueur dans le canton de Genève. La prise en charge dépendra des conditions de votre assurance internationale et des éventuels accords avec les prestataires de soins en Suisse.</p>
      </div>  
    
      <div class="firstparagraph">
      <div class="firstparagraph_titleimg">
      <img src="<?php bloginfo('template_url');?>/images/logopagetarifsplusd'informations.svg" alt="Logo plus d'informations">
      <h4>Pour plus d'Informations</h4>
      </div>
      <p>Pour toute question sur les tarifs ou les modalités de remboursement de vos soins infirmiers à domicile, n'hésitez pas à me contacter. Je suis à votre disposition pour vous fournir des informations supplémentaires et vous aider à comprendre vos options de couverture d'assurance.</p>
      </div>

      </div>
      </div>
      
    <!--Ici se termine le main-->




<?php get_footer(); ?>



<?php /* Template Name: Politique de confidentialité */ ?>

<?php
 $privacy = get_field('pol_privacy');
?>

<?php 
get_header(); 
?>
<main>
    <div class="polprivacy">
<?php echo $privacy; ?>
    </div>
</main>

<?php get_footer(); ?>
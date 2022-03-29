<?php

get_header();
?>

<h1> Accueil </h1>
<h3> <a target="_blank" href="<?= get_permalink(get_page_by_title('Actus')); ?>">Actus </a></h3>
<h3> <a target="_blank" href="<?= get_permalink(get_page_by_title('Nous contacter')); ?>"> Nous contacter </a></h3>
<img src="<?php echo get_template_directory_uri(); ?>/Assets/news.jpg" alt="journaux" />

<h4>A LA UNE</h4>
<?php
// Affichage de la page d'accueil sans la boucle
if (have_posts()) :
    the_post();
?>
     <article>
         <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
     </article
<?php
endif;

get_footer();

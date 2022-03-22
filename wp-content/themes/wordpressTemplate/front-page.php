<?php

get_header();
?>

<h1> Accueil </h1>
<h3> <a href="<?= get_permalink(); ?>"><?php the_title(); ?>Actus </h3>
<img src="<?php echo get_template_directory_uri(); ?>/Assets/news.jpg" alt="journaux" />

<h4>A LA UNE</h4>
titre 1 <br>
titre 2 <br>
titre 3 <br>



<?php
// Affichage de la page d'accueil sans la boucle
// if (have_posts()) :
//     the_post();
?>
<!-- //     <article>
//         <h1><?php the_title(); ?></h1>
//         <div><?php the_content(); ?></div>
//     </article -->
<?php
// endif;

get_footer();

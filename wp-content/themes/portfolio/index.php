<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h2 class="text-center font-weight-bold mt-5"><a class="titre-boucle" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<hr>

<div class="entry">
   <?php the_content(); ?>
</div>

<?php endwhile; else: ?>

<p>Contenu non trouvé!</p>

<?php endif; ?>

<?php get_footer(); ?>
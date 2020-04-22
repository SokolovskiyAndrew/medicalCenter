<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php get_template_part( 'template_parts/hero-common'); ?>

<section class="container">

<?php the_content(); ?>

</section>


<?php endwhile; ?>
<?php endif;  ?> 


<?php get_footer(); ?>
<?php get_header(); ?>

<?php the_post(); ?>
<?php the_content(); ?>
<p><?php the_field('text'); ?></p>

<?php get_footer(); ?>
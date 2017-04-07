<?php get_header(); ?>

<?php the_post(); ?>
<?php the_content(); ?>
<p><?php the_field('text'); ?></p>

<p><?php the_field('e-mail'); ?></p>
<p><?php the_field('editor'); ?></p>

<?php get_footer(); ?>
<?php
/**
 * Template Name: List
 */
get_header(); ?>

<?php while (have_posts()): the_post(); ?>
	<?php get_template_part('template-parts/content', 'list'); ?>
<?php endwhile; ?>

<?php get_footer(); ?>

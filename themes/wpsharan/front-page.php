<?php
/**
 * The front page template file

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpsharan
 */

get_header(); ?>

	<main>
		<?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); ?>
                <?php get_template_part('template-parts/hero-section' ); ?>
                <?php get_template_part('template-parts/about-section' ); ?>
                <?php get_template_part('template-parts/features-section' ); ?> 
                <?php get_template_part('template-parts/testimonials-section' ); ?>
                <?php get_template_part('template-parts/clients-section' ); ?>
                <?php get_template_part('template-parts/blog-section' ); ?>
                <?php get_template_part('template-parts/cta-footer-section' ); ?>

            <?php }
        }
        ?>
	</main>

<?php
get_footer();
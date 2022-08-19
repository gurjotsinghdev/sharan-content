<?php
/**
 * The main template file

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wpsharan
 */

get_header(); ?>

	<main class="container">
		<?php 
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
            }
        }
        ?>
	</main>

<?php
get_footer();
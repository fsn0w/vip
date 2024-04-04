<?php

/*
Template Name: Flexible Content
*/

get_header();

?>

<section id="primary">
		<main id="main">

        <?php if ( have_rows('flexible_content') ): ?>

<?php while ( have_rows('flexible_content') ): the_row(); ?>

    <?php if( get_row_layout() ){
        get_template_part('templates/flexible/' . get_row_layout() );
    }
    ?>

<?php endwhile; ?>

<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();